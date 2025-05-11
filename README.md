# 質問箱（投稿機能なし）

質問を閲覧することができる Web アプリケーションです（投稿機能はまだ未実装です）。

---

## 🌐 URL一覧

- アプリケーション: [http://localhost](http://localhost)
- phpMyAdmin: [http://localhost:8080](http://localhost:8080)

---

## 🛠️ 開発環境構築手順

このアプリは Docker により Laravel + MySQL + Nginx + phpMyAdmin 構成で動作します。

### 1. リポジトリをクローン

git clone git@github.com:satoshunma/WebDesign_Contest.git
cd WebDesign_Contest

### 2. Docker コンテナをビルド・起動

docker-compose up -d --build

### 3. PHP コンテナに入る

docker-compose exec php bash

### 4. Laravel の依存パッケージをインストール

composer install

### 5. .env ファイルの作成とアプリキー生成

cp .env.example .env
php artisan key:generate

.env の以下の項目が下記のようになっているか確認・修正してください：

APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

### 6. マイグレーションと初期データ投入

php artisan migrate --seed

注意事項


php artisan serve は不要です。Nginx 経由で http://localhost にアクセスできます。
phpMyAdmin は http://localhost:8080 で利用可能。
ユーザー名: laravel_user
パスワード: laravel_pass
