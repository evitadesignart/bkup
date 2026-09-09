# 違和感ノート（サーバー版）

「なんか変」「困りごと」を誰でも書き留められる単語帳と、Googleログインしたユーザーごとの企画ログを持つWebアプリです。

- **違和感カード**：誰でもログイン不要で投稿・閲覧できます
- **企画ログ**：Googleログインしたユーザー本人だけが保存・閲覧できます
- データはサーバー上のSQLiteファイル（`data/iwakan.db`）に保存されます

## 1. 事前準備

- Node.js 18以上
- Googleアカウント（OAuthクライアントIDの発行に必要）

## 2. セットアップ

```bash
npm install
cp .env.example .env
```

`.env` を開いて以下を設定してください。

```
PORT=3000
GOOGLE_CLIENT_ID=（次の手順で発行するクライアントID）
JWT_SECRET=（ランダムな文字列。生成例: openssl rand -hex 32）
NODE_ENV=development
```

## 3. Google OAuthクライアントIDの発行

1. [Google Cloud Console](https://console.cloud.google.com/apis/credentials) を開く
2. 「認証情報を作成」→「OAuthクライアントID」
3. アプリケーションの種類は **ウェブアプリケーション**
4. 「承認済みのJavaScript生成元」に以下を追加
   - 開発用: `http://localhost:3000`
   - 本番用: 実際に公開するドメイン（例: `https://your-domain.com`）
5. リダイレクトURIの設定は不要です（今回はGoogle Identity Servicesのボタン方式を使っており、リダイレクトを使わないため）
6. 発行されたクライアントIDを `.env` の `GOOGLE_CLIENT_ID` に貼り付ける

## 4. 起動

```bash
npm start
```

`http://localhost:3000` にアクセスして動作確認できます。

開発中にファイル変更のたびに自動再起動したい場合：

```bash
npm run dev
```

## 5. 本番公開にあたっての注意点

- **HTTPS必須**：`NODE_ENV=production` にするとセッションCookieに `secure` 属性が付き、HTTPS環境でしか送信されなくなります。リバースプロキシ（Nginxなど）やホスティングサービスでHTTPS化してください。
- **Google OAuthの生成元を追加**：本番ドメインを追加し忘れるとログインボタンがエラーになります。
- **SQLiteファイルの永続化**：`data/iwakan.db` を保存するディスクが再デプロイのたびに消えないホスティング先を選んでください（Renderなら永続ディスクの追加、VPSならそのまま問題なし、など）。サーバーレス環境（Vercelなど）はファイルシステムが一時的なため不向きです。
- **バックアップ**：`data/iwakan.db` を定期的にコピーしておくと安心です。
- **投稿内容のモデレーション**：現状、文字数制限以外の投稿内容チェックはありません。公開範囲が広がる場合は、簡易的なNGワードフィルタや管理者向けの削除機能の追加を検討してください（必要であれば追加実装します）。
- **スケールする場合**：アクセスが増えてSQLiteで詰まってきたら、PostgreSQLなどへの移行を検討してください（テーブル構造はほぼそのまま移行できます）。

## ディレクトリ構成

```
iwakan-note-server/
├── server.js          # エントリーポイント
├── db.js              # SQLite初期化
├── middleware/
│   └── auth.js        # セッションCookie検証
├── routes/
│   ├── auth.js         # Googleログイン検証・ログアウト・現在のユーザー取得
│   ├── cards.js         # 違和感カードのCRUD（認証不要）
│   └── ideas.js         # 企画ログのCRUD（要ログイン）
├── public/
│   ├── index.html
│   ├── style.css
│   └── app.js
└── data/
    └── iwakan.db       # 実行時に自動生成される
```
