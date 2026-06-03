# ページ一覧

## 環境情報

| 項目 | 値 |
|------|-----|
| ローカルURL | http://260528-test-otomi.local/ |
| WP管理画面 | http://260528-test-otomi.local/wp-admin/ |
| ユーザー名 | test |
| パスワード | testtest |
| 本番URL | <!-- 未指定 --> |

## 案件概要

- **案件種別**: LP（WordPress / 1ページ案件 / モードA・親完結）
- **デザインソース**: Figma MCP
- **クライアント**: 大冨運輸様（採用LP）

## デザイン仕様メモ

> Figma MCPで取得した値を正とする。以下はメモ用。

| 項目 | 値 |
|------|-----|
| 本文フォントサイズ | <!-- Figmaから取得 --> |
| 見出しフォントサイズ | <!-- Figmaから取得 --> |
| セクション間の余白 | <!-- Figmaから取得 --> |
| コンテンツ幅 | <!-- Figmaから取得 --> |
| その他ルール | 背景のブルーリボンはSVG / FV(PC)は画像+リボン書き出し / FV(SP)は画像+グラデーションをコーディング |

## 特記事項（デザイン上の注意点）

- **背景のブルーリボン**: SVG画像で書き出して配置
- **FVセクション**:
  - PC: 画像 + ブルーリボンをセットで画像として書き出し
  - SP: 画像書き出し + ブルーグラデーションはコーディングで表現
- **仕事のやりがい セクション**: スクロールに合わせて下から1枚ずつカードが出現するアニメーション
  - カード1: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=336-1335&m=dev
  - カード2: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=336-1343&m=dev
  - カード3: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=336-1351&m=dev
  - カード4: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=336-1359&m=dev
- **社員の1日 セクション**: タブ切替UI
  - タブ2の内容: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=390-2098&m=dev
  - タブ3の内容: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=392-2191&m=dev

---

## 使い方
このフォルダにFigma URLとデザイン画像を記録しておくと、MCPで一括コーディング＆差分比較ができます。

例: 「TOPページをコーディングして」「差分を比較して」

### デザイン画像の保存場所
`designs/` フォルダに保存。ファイル名はスラッグ名で統一。

> **このプロジェクトでは Figma MCP を主に使うため、ページ全体の画像は事前保存せず、各セクション実装時に `get_design_context` / `get_screenshot` を都度呼ぶ運用とする。** スクショ比較が必要なときに該当node-idの画像を `.page-info/designs/` に保存して比較する。

---

## 採用LP（/recruit）
- **テンプレート**: `page-recruit.php`（固定ページ slug=`recruit` / URL: `/recruit/`）
- **SCSS**: `src/scss/module/_recruit.scss`
- **備考**: コーポレートサイトの下層に設置するLP。サイトトップ（/）は別途実装予定で `index.php` は最小プレースホルダ。
- **PC**: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=133-341&m=dev (node-id: 133:341)
- **SP**: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=574-4&m=dev (node-id: 574:4)
- **状態**: 🟡 構造実装完了（画像配置・WP設定待ち）

## セクション実装ステータス（TOP）

PC（133:341）のメタデータから抽出。順序は y 座標準拠。

1. ✅ Header（ロゴ + nav: 会社サイト / お問い合わせ）— node-id: 133:1330, 133:1274
2. ✅ FV（"ただ運ぶだけじゃ、終わらない。" + サブコピー / トラック+人物画像 + 青リボン背景）— node-id: 133:1275
3. ✅ メッセージ（"事に仕え、社会を静かに支える" / 代表取締役 尾﨑俊介）— node-id: 301:281 ~
4. ✅ 数字で見る大富運輸（4 stats: 実績/少数精鋭/平均勤続年数/働き方改革）— node-id: 324:691 ~
5. ✅ 私たちが大切にする3つの文化（Culture）（本質を考える/丁寧に積み重ねる/感謝を伝え合う）— node-id: 301:290 ~
6. ✅ 行動指針（Behavioral guidelines / 5項目）— node-id: 300:205 ~
7. ✅ **仕事のやりがい**（Satisfaction / 4 card / スクロールで下から出現アニメ）— node-id: 336:1244 (Satisfaction), カード: 336:1335 / 336:1343 / 336:1351 / 336:1359
8. ✅ **社員の1日**（タブ切替 / 1日の業務フロー）— node-id: タブ2=390:2098 / タブ3=392:2191
9. ✅ Evaluation（評価 / 5項目）— node-id: 318:492 ~
10. ✅ Environment（働く環境・働き方 / 10項目）— node-id: 324:817 ~
11. ✅ Training（研修制度・社内制度 / 6項目）— node-id: 324:1049 ~
12. ✅ Recruitment（募集要項 / 3 jobs: 配送/配車/事務）— node-id: 336:1418 ~
13. ✅ 採用の流れ（面接 1〜2回 等）— node-id: 336:1720 ~
14. ✅ FAQ（よくある質問 / 8項目）— node-id: 336:1763 ~
15. ✅ CTA（"コトに、向き合える"人へ"）— node-id: 336:1817 / 336:1814
16. ✅ お問い合わせフォーム（email / phone / select / inquiry）— node-id: 336:1831
17. ✅ Footer（会社情報 / コピーライト）— node-id: 336:1901

---

## 凡例
- ✅ 完了
- 🟡 作成中
- ✅ 未着手

## 画像ファイル命名規則
- 基本: `{スラッグ名}.png` (例: `front-page.png`)
- PC/SP別: `{スラッグ名}_pc.png` / `{スラッグ名}_sp.png`
