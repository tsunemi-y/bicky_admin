## 環境構築
### 最初に  
Dockerはプログラムを動かすための基盤を作るためのシステムとして一番使われている技術なので、Dockerを使って環境構築をする  
なんでも最初に全体像を掴むことが後の理解を促進させるのに重要なので、以下動画で全体像を掴んでから環境構築を進めると効率がいい
[Docker　初心者講座](https://www.youtube.com/watch?v=YfaB3PJv1f0&ab_channel=%E3%82%BB%E3%82%A4%E3%83%88%E5%85%88%E7%94%9F%E3%81%AEWeb%E3%83%BBIT%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E8%BB%A2%E8%81%B7%E3%83%A9%E3%83%9C)  
### 手順
1. Dockerをスムーズに使うために、WSL2をインストール  
以下を見てWSL2の概念を理解しながらインストールするのがいい（全部を完璧に理解は最初は無理なので、なんとなく全体像だけでも掴むことを意識する）  
   [インストール・解説動画](https://www.youtube.com/watch?v=odDJ3QvlF2g&ab_channel=%E3%81%82%E3%81%BE%E3%81%A4%E6%A5%93%7C%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0%E8%A7%A3%E8%AA%AC)
2. 開発に必要なディレクトリを構成  
・1でインストールしたUbuntu上の`home/自分の名前`の中で、`git clone https://github.com/tsunemi-y/bicly_admin`を実行  
・上記を実行すると`home/自分の名前`ディレクトリ中に`bicly_admin`ディレクトリができるので、それと同階層に[google ドライブのURL](https://drive.google.com/drive/folders/1RwGtf3cy75YWxytQfGj6ZGPO-la9lT0e?usp=drive_link)内の`Docker`ディレクトリと`docker-compose.yml`をそのままコピーする
3. CLIにて、上で配置した`docker-compose.yml`と同階層で`docker-compose build`を実行し、build完了後、`docker-compose up -d`を実行
4. CLIでphp artisan migrateを実行後、php artisan db:seedを実行してデータベースを作成
5. bicky_admin直下にて、`.env`ファイルを作成し以下をそのまま貼り付け
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:t6eVj5Tw8W7QqVJmKv0+SNY0cmUHEFWuCJrg4x9euCs=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"
```
7. これでブラウザで`localhost`にアクセスすると、ダッシュボードのページが開くはず（permissionとかの問題があれば適宜解消する）
    
