# 複数PC対応・Git安全運用＆環境構築ガイド

このドキュメントは、本リポジトリ（複数プロジェクトが共存するモノリポ環境）を**別のPCでセットアップ・作業する際、他プロジェクトのファイルを誤って上書き・削除しないための手順書**です。

---

## 1. 概要と原因

本リポジトリ（`lp`）は、直下に複数の案件フォルダ（`umaimon-micchan`, `himawari-seitaiin`, `luu-stella` 等）が存在します。
`git add .`（全変更追加）を実行すると、別PCで作業中の他フォルダのデータや未追跡ファイルが意図せずコミットされ、他PCの作業を上書き・競合破壊してしまう原因になります。

---

## 2. 他PCでの初期設定（ワンクリック／コピペ設定）

新しいPCで環境構築する際、**PowerShell** または **Git Bash** を開き、以下のコマンドをコピー＆ペーストして実行してください。

### 【PowerShell用】一括自動設定スクリプト
```powershell
# 1. 安全なGitエイリアスの登録（git add . の代わりに安全なコマンドを登録）
git config --global alias.add-dir "!f() { git add \"$1/\"; }; f"

# 2. 自動改行コード変換の防止（Windows/Mac間の文字コード乱れ防止）
git config --global core.autocrlf false
git config --global core.quotepath false

# 3. Pull時の安全設定（自動的にrebaseして余計なマージコミットを作らない）
git config --global pull.rebase true

Write-Host "Git安全設定が正常に完了しました！" -ForegroundColor Green
```

### 【Git Bash / Mac用】一括自動設定スクリプト
```bash
# 1. 安全なGitエイリアスの登録
git config --global alias.add-dir '!f() { git add "$1/"; }; f'

# 2. 改行・日本語パスの文字化け防止
git config --global core.autocrlf false
git config --global core.quotepath false

# 3. Pull時の安全設定
git config --global pull.rebase true

echo "Git安全設定が正常に完了しました！"
```

---

## 3. VSCode の自動保存と誤編集防止設定

VSCode を使用する場合、プロジェクトルート直下の `.vscode/settings.json` に設定を入れておくことで、全PCで同じ自動保存・文字コードルールを共有できます。

### `.vscode/settings.json`（リポジトリ共通共有設定）
```json
{
  "files.autoSave": "afterDelay",
  "files.autoSaveDelay": 1000,
  "files.encoding": "utf8",
  "files.eol": "\n",
  "git.confirmSync": false,
  "git.autofetch": true
}
```

---

## 4. 日常の作業フロー（他PCで上書きしない安全な手順）

作業時は**常に自分が作業しているプロジェクトのフォルダのみ**をコミット・プッシュします。

### ステップ1: 作業前の最新取得
```bash
git pull origin main
```

### ステップ2: 作業完了後のステージング（重要）
❌ **やってはいけないコマンド**:
```bash
git add .
git add -A
```

⭕ **必ず行う安全なコマンド** (作業フォルダのみ指定):
```bash
# 例: umaimon-micchan を作業した場合
git add umaimon-micchan/

# または設定した安全エイリアスを使用
git add-dir umaimon-micchan
```

### ステップ3: コミット＆プッシュ
```bash
git commit -m "umaimon-micchan: 変更内容の要約"
git push origin main
```

---

## 5. まとめ

1. `git add .` は使わない
2. 必ず `git add 作業フォルダ名/` で自分の作業ファイルだけを追加する
3. これにより、複数PCや複数人で異なる案件を同時に進めても、お互いのファイルを上書きしません。
