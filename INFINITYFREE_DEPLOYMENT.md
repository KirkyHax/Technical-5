# InfinityFree deployment

This project is prepared for the InfinityFree site `technicalformativeassessment4.ct.ws`.

InfinityFree does not provide Composer or Artisan access on the server. Build the application locally, then upload the complete project, including `vendor`, to the site's `htdocs` folder.

## 1. Prepare the project locally

Run these commands on a computer with PHP 8.3+, Composer, and Git:

```bash
cp .env.infinityfree.example .env
composer install --no-dev
php artisan key:generate
php artisan optimize:clear
composer dump-autoload --no-dev --optimize=false
```

Do not upload `node_modules`. This project serves its stylesheet from `public/css/app.css`, so an npm build is not required.

## 2. Create the InfinityFree database

1. Open the InfinityFree client area and create a MySQL database.
2. Copy the database host, database name, username, and password shown there. Do not assume the host is `localhost`.
3. Open phpMyAdmin for the new database.
4. Import `database/infinityfree.sql`.

The current pages use static arrays as required by the activity, but the SQL export is included for the submission requirement and for the next database-backed activity.

## 3. Create the production environment file

Before running the commands above, copy `.env.infinityfree.example` to `.env`, then replace every `REPLACE_WITH_...` value with the credentials from the InfinityFree client area. Run `php artisan key:generate` after the file exists. Keep these settings:

```dotenv
APP_ENV=production
APP_DEBUG=false
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

Generate the key locally with `php artisan key:generate`, then upload the completed `.env` file to `htdocs`. Never commit `.env` to GitHub.

## 4. Upload to `htdocs`

Upload the contents of the `laravel-pos-foundations` folder directly into the site's `htdocs` folder. Do not upload the outer folder itself as a nested directory.

The remote layout should include:

```text
htdocs/
├── .env
├── .htaccess
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
└── vendor/
```

The root `.htaccess` sends browser requests into `public`, while `public/.htaccess` sends application routes to Laravel's `index.php`.

## 5. Test the hosted pages

Open these URLs:

```text
https://technicalformativeassessment4.ct.ws/
https://technicalformativeassessment4.ct.ws/about
https://technicalformativeassessment4.ct.ws/customers
https://technicalformativeassessment4.ct.ws/users
```

If the site shows a 500 error after an upload, clear the contents of `bootstrap/cache` and `storage/framework/views` on the server while keeping their `.gitignore` files. Also confirm that the uploaded `vendor` directory is complete.
