# Laravel Starter Kit with Livewire

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About This Starter Kit

This is a Laravel starter kit pre-configured with Laravel Breeze using Livewire. It includes a complete authentication system with registration, login, password reset, email verification, and profile management - all built with Livewire components.

## Features

- **Laravel 12** - The latest version of Laravel framework
- **Laravel Breeze** - Minimal, simple authentication scaffolding
- **Livewire 3** - A full-stack framework for Laravel that makes building dynamic interfaces simple
- **Volt** - An elegantly crafted functional API for Livewire
- **Tailwind CSS** - A utility-first CSS framework
- **Alpine.js** - A rugged, minimal framework for composing JavaScript behavior in your markup

## Authentication Features

- User Registration
- User Login
- Password Reset
- Email Verification
- Profile Management
- Password Update
- Account Deletion

## Requirements

- PHP 8.3 or higher
- Composer
- Node.js & NPM
- SQLite, MySQL, or PostgreSQL

## Installation

1. Clone the repository:
```bash
git clone https://github.com/Vitaliy-1/hs.git
cd hs
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install and compile frontend dependencies:
```bash
npm install
npm run build
```

For development with hot-reload:
```bash
npm run dev
```

4. Copy the environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in the `.env` file. By default, it uses SQLite:
```env
DB_CONNECTION=sqlite
```

7. Run database migrations:
```bash
php artisan migrate
```

8. Start the development server:
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Development

To start the development server with hot module replacement:

```bash
# Terminal 1: Start Laravel development server
php artisan serve

# Terminal 2: Start Vite dev server for hot reload
npm run dev
```

## Testing

Run the test suite:
```bash
php artisan test
```

Or using PHPUnit directly:
```bash
./vendor/bin/phpunit
```

## Code Style

This project uses Laravel Pint for code styling:
```bash
./vendor/bin/pint
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

For more information, visit the [Laravel documentation](https://laravel.com/docs).

## About Livewire

Livewire is a full-stack framework for Laravel that makes building dynamic interfaces simple, without leaving the comfort of Laravel. For more information, visit the [Livewire documentation](https://livewire.laravel.com).

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
