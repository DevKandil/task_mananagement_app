<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Task Management Application

Task Management application using Laravel. The application allows users to create, update, delete, and view tasks.


## How to install it on your local machine.

- You must have PHP with the last version installed on your machine.

1. Clone the GitHub repo for this project locally.
- ``git clone git@github.com:DevKandil/task_mananagement_app.git``

3. cd into your project.
- ``cd task_mananagement_app``

5. Install Composer Dependencies.
- ``composer install``

7. Install NPM Dependencies.
- ``npm install``
- ``npm run build``

10. Create a copy of your .env file.
- ``cp .env.example .env``

12. Generate an app encryption key.
- ``php artisan key:generate``

14. Create an empty database for our application.
- ``touch database/database.sqlite``

16. In the .env file, add database information to allow Laravel to connect to the database.
- ``DB_CONNECTION=sqlite``

18. Migrate the database.
- ``php artisan migrate``
- ``php artisan db:seed``

19. To start running your app.
- `` php artisan serve``
