# Laravel POS Foundations

IT0049 Web System Technologies · Technical Formative Assessment 5

This project rebuilds the four-page POS foundation in Laravel. It demonstrates the same MVC responsibilities used in the earlier activity: routes select controller methods, controllers prepare page data, and Blade views render the response.

## Required pages

| URL | Route | Purpose |
| --- | --- | --- |
| `/` | `home` | Landing page |
| `/about` | `about` | MVC and project explanation |
| `/customers` | `customers.index` | Customer account listing |
| `/users` | `users.index` | User account listing |

## Project structure

- `routes/web.php` defines all four named routes.
- `app/Http/Controllers/PageController.php` contains the landing and about page actions.
- `app/Http/Controllers/CustomerController.php` contains five static customer records.
- `app/Http/Controllers/UserController.php` contains five static user records.
- `resources/views` contains the shared Blade layout and four page views.
- `database/migrations` and `database/seeders` are included for the submission checklist. The required listing pages still intentionally use static controller arrays.
- `database/infinityfree.sql` provides a phpMyAdmin import for shared hosting.
- `tests/Feature/PosPagesTest.php` checks the required routes and sample records.

## Local setup

Requirements: PHP 8.3+, Composer, Node.js, and npm.

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

Open `http://127.0.0.1:8000` in a browser. The exercise stylesheet is served from `public/css/app.css`, so no frontend build step is required.

Run the feature tests with:

```bash
php artisan test
```

## Hosting checklist

1. Upload the raw project files to the host and install dependencies with Composer, or upload the generated `vendor` directory when the host does not provide Composer.
2. Set the site's document root to the project's `public` directory.
3. Create the production database and update the `DB_*` values in `.env`.
4. Run `php artisan migrate --seed` once, or import the generated database migration through the host's terminal/database tools.
5. Set `APP_ENV=production`, `APP_DEBUG=false`, and generate a production `APP_KEY`.
6. Confirm the four URLs and navigation links before submitting the hosted link.

For the detailed InfinityFree workflow, see `INFINITYFREE_DEPLOYMENT.md`.

## GitHub checklist

The repository is ready for GitHub. `.env` and `vendor` are excluded by `.gitignore`, so database credentials and generated dependencies are not committed.

```bash
git init
git add .
git commit -m "Build Laravel POS Foundations application"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPOSITORY.git
git push -u origin main
```

## Student information

- Student Name: ______________________________
- Group Name: ________________________________
- Section: ___________________________________
- Professor: _________________________________
