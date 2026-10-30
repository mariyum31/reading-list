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

## AI usage

### AI Usage

I used Claude for guidance while developing this project. It helped me understand Laravel concepts, troubleshoot errors, debug routes and Blade templates, and resolve issues during setup. I also used it to understand the code and make corrections. I reviewed and tested the implementation myself.
