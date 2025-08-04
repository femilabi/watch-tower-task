# Watch Tower - Minimalist MVC PHP Project

This project demonstrates a minimalist implementation of the Model-View-Controller (MVC) architecture in PHP. It is designed for learning and easy customization.


## Getting Started

1. Clone or download this repository.
2. Run `composer install` in the project root to install dependencies.
3. (If you add or update classes, run `composer dump-autoload` to refresh autoload files.)
4. Set up your database and update `config.php`.
5. Ensure Apache mod_rewrite is enabled and `.htaccess` is configured.
6. Place the project in your web server's document root (e.g., `htdocs` for XAMPP).
7. Access the app at `http://localhost/watch-tower/`.

---

## Configuration

### config.php file

1. Go to `app/config/` and copy `config.example.php` to `config.php`.
2. Open `app/config/config.php` and update the following values with your local database and app settings:

```php
<?php
define('BASE_URL', 'http://localhost/watch-tower/');

define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');
define('DB_PORT', '');

define('JWT_SECRET', 'your-secret-key-here');

define('GOOGLE_CLIENT_ID', 'your-google-client-id-here');
define('GOOGLE_CLIENT_SECRET', 'your-google-client-secret-here');
define('GOOGLE_REDIRECT_URI', BASE_URL . 'auth/google-login-callback');
?>
```

## .htaccess File

The `.htaccess` file is required to enable clean URLs and proper routing for the MVC structure. Place your `.htaccess` file in the root directory (or your Apache document root if different).

Make sure the following line is uncommented in your Apache `httpd.conf` file:

```apache_conf
LoadModule rewrite_module modules/mod_rewrite.so
```

Example `.htaccess` content:

```apache_conf
RewriteEngine On
RewriteRule ^(.+)_v[0-9]+\.(js|css)$ $1.$2 [QSA,L]
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
```

## Database Setup

1. Create a MySQL database named `watch_tower` (or update the name in your config if different).
2. Import your database schema and data as needed. (No `bookDB.sql` is provided; create tables for users, posts, etc. as required by your app.)

## Project Structure

- `app/` - Main application code
  - `controllers/` - Controller classes (e.g., `HomeController.php`, `AuthController.php`)
  - `models/` - Model classes (e.g., `User.php`, `Post.php`)
  - `views/` - View templates and assets
  - `core/` - Core framework classes (e.g., `App.php`, `Controller.php`, `Database.php`)
  - `helpers/` - Helper functions
  - `routes.php` - Route definitions
- `uploads/` - File uploads
- `index.php` - Application entry point
- `composer.json` - Composer dependencies

## How MVC Works in This Project

- **Model:** Handles data and business logic (see `app/models/`).
- **View:** Responsible for UI and presentation (see `app/views/`).
- **Controller:** Manages requests and coordinates between Model and View (see `app/controllers/`).

---

Happy coding!