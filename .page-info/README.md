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

## TOP（トップページ / front-page）
- **テンプレート**: `front-page.php`
- **SCSS**: `src/scss/module/_top.scss`
- **デザイン画像（PC）**: `designs/front-page.png`
- **デザイン画像（SP）**: `designs/front-page_sp.png`
- **PC**: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=133-341&m=dev
- **SP**: https://www.figma.com/design/mDp0GGIsRceDcJ7HX7T2nL/FIX-%E5%A4%A7%E5%AF%8C%E9%81%8B%E8%BC%B8%E6%A7%98--%E3%82%B3%E3%83%94%E3%83%BC-?node-id=574-4&m=dev
- **状態**: ⬜ 未着手

---

## 凡例
- ✅ 完了
- 🟡 作成中
- ⬜ 未着手

## 画像ファイル命名規則
- 基本: `{スラッグ名}.png` (例: `front-page.png`)
- PC/SP別: `{スラッグ名}_pc.png` / `{スラッグ名}_sp.png`
