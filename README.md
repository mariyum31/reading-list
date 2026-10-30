<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Reading List

A small Laravel app to track books I want to read, am reading, or have finished.
You can add, edit and delete books, and filter the list by status.
No login is needed.

## How to run

    git clone https://github.com/YOUR-NAME/reading-list.git
    cd reading-list
    composer install
    cp .env.example .env
    php artisan key:generate
    touch database/database.sqlite
    php artisan migrate
    php artisan serve

Then open http://localhost:8000/books

On Windows, replace the `touch` line with `type nul > database\database.sqlite`.

## AI usage

I used Claude to [describe honestly what you used it for]. I reviewed and tested the code, and [say what you changed or learned].
