# Laravel Docker Starter

This workspace includes a basic Docker setup for:

- PHP 8.3 FPM
- Composer 2
- Nginx
- MySQL 8.4

## Start the environment

```bash
cp .env.example .env
docker compose up -d --build
```

The app will be available at `http://localhost:8000`.

## Create a fresh Laravel project

Run this only while the workspace is still empty:

```bash
docker compose run --rm app composer create-project laravel/laravel app
```

Then update `app/.env` with:

```env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=expense_tracker
DB_USERNAME=laravel
DB_PASSWORD=secret
```

## Helpful commands

```bash
docker compose exec app php artisan migrate
docker compose exec app php artisan serve --host=0.0.0.0 --port=8000
docker compose exec app composer install
docker compose down
```
