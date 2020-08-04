# Setup intructions

Prequest: have composer installed and made globally available

1. git clone git@github.com:filipkunjadic/laravel-learn.git
2. mysql: create database DATABASE_NAME
3. mv .env.example .env
3. Fill in DB/host details in .env file
4. Setup server and point it to project/public folder
6. php artisan key:generate
5. run php artisan migrate:fresh --seed
