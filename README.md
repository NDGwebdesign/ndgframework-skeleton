# NDG Framework

NDG Framework is a lightweight PHP MVC framework with routing, views, migrations, a small CLI, and Vite + Tailwind support.

## Requirements

- PHP 8.2+
- Composer 2+
- Node.js 18+ and npm
- MySQL or MariaDB (for database features)

## Project Structure

- `app/Controllers` - Controllers
- `app/Models` - Models
- `routes/web.php` - Web routes
- `resources/view` - Page views
- `resources/layouts` - Layout templates
- `resources/components` - Reusable components
- `migrations` - Migration files
- `public` - Public web root
- `ndg` - NDG CLI commands

## Installation

### Option A: Install with Composer create-project (GitHub VCS)

If your packages are hosted on GitHub (without Packagist), configure VCS repos once:

composer config -g repositories.ndgframework-skeleton vcs https://github.com/NDGwebdesign/ndgframework-skeleton.git
composer config -g repositories.ndgframework-core vcs https://github.com/NDGwebdesign/ndgframework-core.git

Then create a new application:

composer create-project ndgwebdesign/ndgframework-skeleton my-app

If you are still using development branches and no stable tags yet:

composer create-project ndgwebdesign/ndgframework-skeleton my-app dev-main

### Option B: Clone the skeleton directly

git clone https://github.com/NDGwebdesign/ndgframework-skeleton.git my-app
cd my-app
composer install

## First Run

Go to your project directory:

cd my-app

Install frontend dependencies:

npm install

Create production assets (or use npm run dev while developing):

npm run build

Run the PHP server:

php -S localhost:8000 -t public

Open http://localhost:8000 in your browser.

## Environment Setup

The project setup script automatically copies `.env.example` to `.env` after create-project or install.

If needed, create it manually:

copy .env.example .env

Update database and app settings in `.env`.

## Routing Example

Edit `routes/web.php`:

<?php

$router->get('/', function () {
    return view('welcome');
});

## NDG CLI Commands

Run commands from the project root:

php ndg
php ndg make:migration create_users_table
php ndg migrate
php ndg migrate:rollback
php ndg make:view about
php ndg make:mvc product
php ndg components list
php ndg components search button
php ndg components install card

## Frontend Workflow

- `npm run dev` starts Vite in development mode
- `npm run build` builds assets into `public/build`

## Release Notes for Maintainers

- Keep `ndgwebdesign/ndgframework-core` versioned with tags like `v0.1.0`.
- Reference tagged core versions in the skeleton `composer.json`.
- Publish both repositories to Packagist later if you want simpler public installation without VCS config.

## License

MIT
