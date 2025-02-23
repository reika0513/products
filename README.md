# お問い合わせフォーム

## 環境構築 
* Dockerビルド
1. git clone リンク[git@github.com:reika0513/products.git]
2. docker-compose up -d-build

MySQlは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

* Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

### 使用技術
* php 7.4.9
* Laravel 8.83.29
* MySQL 15.1

### URL
* 開発環境　[http://localhost/products]
* phpMyAdmin　[http://localhost:8080/]