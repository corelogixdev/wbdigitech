# WBDigitech Laravel Project Setup

## Overview

This project is a Laravel application built with:

- PHP 8.2+ and Laravel 12
- Vite for frontend asset compilation
- Tailwind CSS and Bootstrap
- Alpine.js and Axios

The application root is the current workspace root. The main web entrypoint is `public/index.php`.

## Prerequisites

Install the following before running the project:

- PHP 8.2 or later
- Composer
- Node.js 18+ / npm 10+ (or compatible)
- A local database server (MySQL, MariaDB, PostgreSQL, or SQLite)

## Installation

Open a terminal in the project root and run:

```powershell
cd d:\corelogix\wbdigitech\wbdigitech
composer install
npm install
```

If a `.env` file does not exist, create one from the example:

```powershell
copy .env.example .env
```

Then set the application environment values in `.env`, especially database settings:

- `APP_NAME`
- `APP_URL`
- `DB_CONNECTION`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

## Setup steps

1. Generate the application key:

```powershell
php artisan key:generate
```

2. Run database migrations:

```powershell
php artisan migrate
```

3. Optionally seed the database:

```powershell
php artisan db:seed
```

4. Build frontend assets for development:

```powershell
npm run dev
```

## Running the application

### Local development server

Start the Laravel server:

```powershell
php artisan serve --host=127.0.0.1 --port=8000
```

Visit `http://127.0.0.1:8000` in your browser.

### Frontend asset watcher

In a second terminal, run:

```powershell
npm run dev
```

This will compile `resources/css/app.css` and `resources/js/app.js` and refresh the browser when files change.

## Production build

To produce optimized assets for deployment:

```powershell
npm run build
```

Then deploy the project and ensure the webserver points to the `public/` directory.

## Testing

Run Laravel tests with:

```powershell
php artisan test
```

If you need to clear caches before testing:

```powershell
php artisan config:clear
php artisan cache:clear
```

## Important files and directories

- `app/` — application logic, controllers, models, middleware
- `bootstrap/` — framework bootstrap files
- `config/` — Laravel configuration
- `database/` — migrations, factories, seeders
- `public/` — web server public files
- `resources/` — views, frontend assets, CSS/JS source files
- `routes/web.php` — main web routes
- `storage/` — runtime storage for cache, sessions, logs
- `vendor/` — PHP dependencies installed by Composer
- `node_modules/` — JavaScript dependencies installed by npm

## Files and folders not required in the repository

These files and directories are generated or temporary and should not be committed to source control:

- `node_modules/`
- `vendor/`
- `public/build/`
- `public/hot`
- `storage/framework/cache/`
- `storage/framework/sessions/`
- `storage/framework/views/`
- `storage/logs/`
- `.env`
- `.env.backup`
- `.env.production`
- `.phpunit.result.cache`
- `.phpunit.cache`
- `.DS_Store`
- `Thumbs.db`
- `.idea/`
- `.vscode/`
- `.fleet/`
- `.zed/`
- `auth.json`
- `Homestead.json`
- `Homestead.yaml`
- `/storage/pail`

## Cleanup guidance

If you want to reduce clutter in the repo or local workspace, remove generated files and directories that are safe to recreate:

- `rm -rf node_modules vendor public/build public/hot storage/framework/* storage/logs/*`
- Remove any IDE/editor folders such as `.idea/`, `.vscode/`, `.fleet/`, `.zed/`
- Remove `.env` and `.env.backup` if you do not want environment data stored locally

> Note: Do not remove `composer.lock` or `package-lock.json`. These lock files are required to restore the exact dependency versions used by the project.

## Recommended workflow

1. `composer install`
2. `npm install`
3. `copy .env.example .env`
4. `php artisan key:generate`
5. `php artisan migrate`
6. `npm run dev`
7. `php artisan serve`

## Additional notes

- The `vite.config.js` file loads `resources/css/app.css` and `resources/js/app.js` as the Vite entrypoints.
- The project uses Tailwind CSS via `postcss.config.js` and `@tailwindcss/vite`.
- If you use a database other than SQLite, update `.env` to match your chosen driver and create the database manually if needed.
