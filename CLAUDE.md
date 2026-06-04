# otomi-lp（大冨運輸 採用LP）コーディングルール

## 概要
大冨運輸様の採用LP。WordPress / 1ページ案件（モードA・親完結）。
背景にブルーリボンSVGを敷き、FV・仕事のやりがい（スクロール出現アニメ）・社員の1日（タブ切替）等のセクションで構成される。

## 重要ファイル
- **.page-info/README.md**: 各ページのFigma URL・テンプレート・デザイン画像・環境情報
- **.page-info/designs/**: Figmaからエクスポートしたデザイン画像（スラッグ名で命名）
- **.coding-md/**: ワークフロー・規約ドキュメント（Skillで不足する細部のみ参照）

## ユーザー手動編集の保持（最重要・全作業共通）

Claudeがコーディングした後、ユーザーが手動でHTML/CSS/SCSS/JS等を修正している可能性が常にある。以下を厳守すること:

1. **ファイル修正前に必ず最新状態をReadする** — 過去セッションの記憶や会話履歴のコードを正としない。ディスク上の現在の内容が常に正。
2. **Editツールで差分適用する** — Writeツールでの全ファイル書き換えは、新規ファイル作成時のみ許可。既存ファイルへのWrite全書き換えは禁止。
3. **指示された箇所以外は触らない** — Read時にユーザーが変更したと思われる箇所（Claudeの記憶と異なる記述）を見つけても、**勝手に元に戻さない・整形し直さない**。ユーザーの意図的な修正とみなす。
4. **疑問があれば質問する** — 「この部分はユーザーが変更したようですが、今回の修正対象ですか？」と確認してから進める。
5. **サブエージェントにも同じルールを引き継ぐ** — 子エージェントへの指示に「編集前に必ずReadし、指示範囲外は触るな」を明記する。

違反例（やってはいけない）:
- 「前にこう書いたから」と記憶のまま上書きする
- リファクタリングついでに関係ない箇所を整える
- Writeで既存ファイルを丸ごと書き直す

## 自動発動ルール（最重要）

以下のパターンを検出したら、**ユーザーの追加指示を待たずに自動で該当Skillを呼ぶこと**。
各モードの実行手順詳細は `coding-flow` Skill に集約済み。

| ユーザーの入力パターン | 呼ぶSkill | モード |
|---|---|---|
| Figma URL or `.page-info/designs/` 画像 + 「コーディングして」等の一括指示 | `coding-flow` | **案件規模で自動分岐**: 1ページ案件→**親完結**（モードA・サブエージェント不使用）/ 複数ページ案件→**共通+TOPは親、下層は子**（モードB）|
| Figma URL or 画像パス + 特定セクション名（例: `footer だけ`、`FVセクション`） | `section-impl` | モードC: 単体セクション実装（サブエージェント不要） |
| 「スクショ比較」「差分見て」「デザインと比べて」 | `section-compare` | — |
| 「SCSS規約チェック」「CSSの規約確認」 | `scss-check` | — |
| 「HTML規約チェック」 | `html-check` | — |
| 「WP構築」「固定ページ作成」「ACF登録」 | `wp-setup` | — |

> **重要**: **セクション単位でサブエージェントに分割するのは禁止**（過去セッションでセクション漏れ・順序狂いが発生したため）。サブエージェント運用は「ページ単位」が最小粒度。

## コーディング時のSkill使用（必須）

LPコーディング作業では、以下のグローバルSkillを使うこと。詳細手順はSkill側に集約されており、必要時にロードされる（トークン効率のため）。

| 場面 | 呼ぶSkill |
|------|----------|
| コーディング開始時・全体像を把握したい | `coding-flow` |
| 1セクションを実装する | `section-impl` |
| SCSS規約をチェック・修正する | `scss-check` |
| HTML規約をチェック・修正する | `html-check` |
| スクショ比較・差分調整 | `section-compare` |
| WordPress管理画面の構築 | `wp-setup` |

### 既存の詳細ドキュメント（Skillで不足時に参照）

Skillに書かれていない細部が必要な場合のみ `.coding-md/` を参照:

| 内容 | ファイル |
|------|----------|
| 全体フロー（[WordPress] / [静的HTML] 共通） | `.coding-md/WORKFLOW_MASTER.md` |
| コーディング手順・Figma取得戦略 | `.coding-md/04-coding/WORKFLOW_04_INITIAL_CODING.md` |
| スクリーンショット比較 | `.coding-md/05-screenshot-comparison/WORKFLOW_05_SCREENSHOT_COMPARISON.md` |
| WordPress構築 | `.coding-md/07-wordpress/WORKFLOW_07_WP_SETUP.md` |

> SCSS規約・HTML規約の詳細は `scss-check` / `html-check` Skill に集約。
> `.coding-md/04-coding/WORKFLOW_04_*_CHECK.md` はSkillへのポインタ。

## SCSS規約のサマリ

詳細は `scss-check` / `section-impl` Skill 参照。要点のみここに記載:

- **BEM記法**・**ネスト禁止**・**`rem()` 関数**で px 値を指定
- **`letter-spacing` のみ `em` 単位**（唯一の例外。`rem()` 禁止）
- **`@use` 必須**（`@import` 禁止）
- **メディアクエリ**は `@include mq("sp") {}` 形式・**各クラス定義ブロック内の最下部**に記述
- **`position: absolute` 原則禁止** → Flexbox / Grid を使う
- **論理プロパティで記述量削減**: `margin: 0 auto` → `margin-inline: auto` / `margin: rem(10) 0` → `margin-block: rem(10)` 等
- **中間幅（PC〜SP間）の破綻防止**: `.inner` 必須、`img { max-width: 100%; height: auto; }`、横並びは `flex-wrap: wrap` か `grid auto-fit`
- **共通クラス（`module/`）は見た目のみ**。余白はページ固有クラスを同じ要素に併記して制御

### クラス命名のページプレフィックスルール

| 案件種別 | TOP/メインページ | 下層ページ |
|---|---|---|
| **1ページ案件**（LP等・モードA） | **プレフィックスなし**。各セクションがblock（`.fv`, `.concept`） | — |
| **複数ページ案件**（モードB） | **`top-` ハイフン繋ぎプレフィックス**（`.top-message`, `.top-message__title`） | **ページスラッグ + `-` プレフィックス**（`.access-hero`, `.access-hero__title`） |

> **複数ページ案件のポイント**: ページプレフィックスは `__`（BEM の element 区切り）ではなく `-`（ハイフン）で繋ぐ。これでTOPと下層のセクション名が衝突せず、blockとして自然に扱える。

```scss
/* GOOD: 1ページ案件（プレフィックスなし） */
.fv {}
.fv__title {}
.concept {}
.concept__heading {}

/* BAD: 1ページ案件で冗長な top プレフィックス */
.top__fv {}
.top__fv-title {}
.top-fv {}        /* 1ページ案件では不要 */

/* GOOD: 複数ページ案件のTOP（top- ハイフン繋ぎ） */
.top-message {}
.top-message__title {}
.top-message__lead {}
.top-fv {}
.top-fv__heading {}

/* BAD: 複数ページ案件のTOPで __ 繋ぎ */
.top__message {}      /* top と message が block/element になり、要素を足せない */
.top__message-title {} /* awkward */

/* GOOD: 複数ページ案件の下層（page-slug- ハイフン繋ぎ） */
.access-hero {}
.access-hero__title {}
.access-map {}
.access-map__pin {}

/* BAD: 旧パターン（page を block 化）— 下層も top- と対称的に統一 */
.access__hero {}
.access__hero-title {}
```

### 共通クラスとページ固有クラスの使い分け

```html
<!-- GOOD: 同じ要素に共通クラス + 固有クラス -->
<div class="common-component page-specific__component">

<!-- BAD: ラッパーで囲んで分離 -->
<div class="page-specific__wrapper">
  <div class="common-component">
</div>
```

## SCSS変数一覧（src/scss/global/_color.scss / _font-family.scss定義）

### カラー（global/_color.scss）
- `$base-color`: #1B1B1B（本文・黒）
- `$white`: #FFFFFF
- `$black`: #1B1B1B
- `$blue`: #008CD6（メインブルー）
- `$gray`: #BABABA
- `$red`: #911111
- `$bg-light`: #F6F9FD（カード背景の薄水色）

### フォント（global/_font-family.scss）※Figmaを正確に反映
- `$base-font`: "Noto Sans JP"（本文・既定。多数派 / カード本文・小見出し・名前・フォーム・タブ・FAQ等）
- `$heading-font`: "Zen Kaku Gothic New"（見出し / セクションh2(.section-title)・FV・Safety・CTAボタン・バッジ・ヘッダーnav）
- `$second-font`: "Inter"（英語eyebrow(.section-title--en)・数字01・数値50年以上・時刻3:15・Step）
- 見出し系の上書きは `module/_recruit.scss` 末尾の一括ブロックで `$heading-font` を適用（ソース順で最後）
- `$regular`: 400
- `$medium`: 500
- `$semi-bold`: 600
- `$bold`: 700

### レイアウト（Figma: PC=1440px幅）
- `.inner` の `max-width`: rem(1388)（暫定。各セクションで適宜調整）
- カード角丸: `border-radius: rem(30)`
- 本文サイズ: `rem(16)`
- 見出しサイズ（h2/カードタイトル）: `rem(24)`

## 既存共通コンポーネント

新規作成前に既存を確認し、再利用すること。

| クラス名 | ファイル | 用途 |
|---------|----------|------|
| `.inner` | _inner.scss | コンテンツ幅制限 |
<!-- プロジェクトに合わせて追記 -->

## PHPパーツ（parts/）

| ファイル | 用途 |
|----------|------|
<!-- プロジェクトに合わせて追記 -->

## 自動更新ルール

共通コンポーネント新規作成時 → 「既存共通コンポーネント」テーブルに追記

## baseリポジトリ自動同期ルール

以下のファイルを変更したとき、作業完了後に必ず**ユーザーに同期確認を取り、OKならベースリポジトリ (`kana-o/base`) に自動反映する**。

### 同期対象ファイル
| ファイル | 理由 |
|----------|------|
| `gulpfile.js` | WPプロジェクトのビルド設定 |
| `gulpfile.static.js` | 静的HTMLプロジェクトのビルド設定 |
| `package.json` / `package-lock.json` | 依存パッケージの変更 |
| `src/scss/global/` 配下 | SCSSのグローバル変数・ミックスイン |
| `src/scss/foundation/` 配下 | SCSSのベース・リセット |
| `src/html/index.html` | 静的HTML用ページテンプレート |
| `src/html/parts/` 配下 | 静的HTML用共通パーツテンプレート |

### 確認メッセージ

対象ファイルを変更した作業完了後、以下の形式でユーザーに確認:

```
📦 ベースリポジトリへの反映確認

以下の変更をベースリポジトリ (kana-o/base) にも反映しますか？
- {変更ファイル1}: {変更内容}
- {変更ファイル2}: {変更内容}

反映する場合は「OK」と返信してください。
```

### 同期手順（ユーザーOK後、自動実行）

1. `%TEMP%\base-sync-{timestamp}\` に `kana-o/base` を `gh repo clone kana-o/base` で一時clone
2. 対象ファイルを案件プロジェクトから一時cloneディレクトリにコピー
3. `git add` → `git commit -m "{動詞} {ファイル名}: {簡潔な変更内容}"`
   - 動詞は変更内容に応じて `update` / `add` / `fix` / `remove` から選択
   - 例: `update gulpfile.js: WebP圧縮設定を調整`
   - 例: `add playwright to package.json`
4. `git push origin main`
5. 一時cloneディレクトリを削除
6. ユーザーに結果を報告（コミットURLを含める）

### 注意事項

- **案件プロジェクトの `.git` は案件リポジトリ専用**。ベースリポジトリへのpushには必ず一時cloneを経由すること
- コピー時、案件固有の差分（プロジェクト名が埋め込まれた部分など）がないか確認してから反映する
- ベースリポジトリ側で競合が起きた場合は自動pushを中止してユーザーに報告
