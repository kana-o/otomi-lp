# 工程 2: 画像のダウンロードと命名

## 概要

Figma MCP 経由で画像をダウンロードし、命名規則に従ってリネーム＆フォルダ振り分けします。
構築に必要な画像のみダウンロードすること。

**前提（書き出し・最適化のルール）**:
- **2倍書き出し**は Figma 側で対応（Export設定で Scale=2x を指定してから取得）
- **圧縮・WebP変換**は Gulp の `imagemin` が自動実行（手動変換不要）
- このワークフローは「リネーム」と「フォルダ振り分け」のみを担当

---

## 命名規則

```
{セクション名}_{連番}.{拡張子}
```

| 用途 | 形式 | 例 |
|------|------|----|
| FV・背景・その他 | `.png` | `fv_01.png`, `about_bg.png` |
| メンバー顔写真 | `.jpg` | `member_01.jpg` |
| アイコン | `.svg` | `common_icon.svg` |
| ロゴ | `.png` / `.svg` | `common_logo.png` |

**共通画像**: 複数ページで使い回す画像は `common_` プレフィックスをつける（例: `common_logo.png`）。

## フォルダ構成

| 案件 | 配置 |
|------|------|
| 1ページ案件 | `src/img/` 直下にすべて配置 |
| 複数ページ案件 | `src/img/{page}/` にページ固有、`src/img/common/` に共通画像 |

`auto-rename-images.cjs` の `--page <名前>` オプションで自動振り分けされる（`common_*` は `common/`、それ以外は `{page}/`）。

---

## 手順

### 1. Figmaから画像をダウンロード

`get_design_context` の `dirForAssetWrites` に保存先の絶対パスを指定して実行する。

- ダウンロードされたファイルはハッシュ名（例: `d9cb69a8d33580a8...eae8.png`）になる
- 保存先は **`src/img/`**（WP/静的HTML共通。ビルドで `assets/img/` または `public_html/assets/img/` へ出力される）

### 2. 使用する画像のみを特定

Figmaのデザインと照合し、実際に使用する画像のハッシュ名をメモしておく。
使用しないファイルはこの時点で削除する。

### 3. リネーム＆フォルダ振り分け

**自動リネームツール（推奨）:**

```bash
# 1ページ案件: 直下にリネームのみ
node .coding-md/02-image-export/auto-rename-images.cjs src/img

# 複数ページ案件: aboutページの画像をリネーム＋振り分け
#   common_* → src/img/common/、その他 → src/img/about/
node .coding-md/02-image-export/auto-rename-images.cjs src/img --page about

# DRY-RUNで確認してから実行
node .coding-md/02-image-export/auto-rename-images.cjs src/img --page about --dry-run
```

**手動の場合:** Glob ツールでハッシュ名ファイルを一覧 → Bash の `mv` でリネーム＆移動（複数ページ案件は `src/img/{page}/` または `src/img/common/` に配置）。

### 4. ハッシュ名ファイルの削除

リネーム後、元のハッシュ名ファイルを削除する。Glob で `src/img/[0-9a-f][0-9a-f]*.{png,jpg,svg}` を取得 → 不要分を Bash の `rm` で削除（Windows/Git Bash でも同じ）。

### 5. 最終確認チェックリスト

- [ ] ハッシュ名ファイルがすべて削除されている
- [ ] 使用されていない画像が削除されている
- [ ] リネーム済みファイルのみが残っている
- [ ] すべての画像がコード内で参照されている

---

## 注意事項

- 画像ソースの配置先は **`src/img/`** で統一（ビルドで自動出力）
- 2倍書き出しは Figma 側 Export 設定で対応（このスクリプトはリサイズしない）
- 圧縮・WebP変換はGulpが自動実行するため手動対応不要
- この工程は工程4（コーディング）の前に完了させること
- 共通画像（ロゴ、共通アイコン等）は `common_` プレフィックスをつけ、複数ページ案件では `--page` 指定で `common/` フォルダへ自動振り分けされる
