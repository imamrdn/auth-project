# Laravel Auth Project

This project is an example implementation of authentication (login and registration) using Laravel with the Bootstrap5 CSS framework. The passwords used in this application must meet several validation criteria using regex.

## Main Features

- **User Authentication**: User registration and login.
- **Password Validation**: Password must contain:
  - Uppercase letters
  - Lowercase letters
  - Numbers
  - Special characters

## Installation

1. Clone this repository to your local machine
   ```sh
   git clone https://github.com/imamrdn/auth-project.git
2. Directory entry
   ``sh
   cd auth-proejct
3. Install PHP dependencies using Composer
   ```sh
   composer install
4. Install JavaScript dependencies using npm
    ```sh
    npm install
5. Copy the .env.example file into .env and customize the database configuration
    ```sh
    cp .env.example .env
6. Generate the application key and run the database migration
    ```sh
    php artisan key:generate
    php artisan migrate
7. You can use the account provided in the seeder
    ```sh
    Email   : super@admin.com
    Pass    : Admin@123
    
    php artisan db:seed
9. Run the Laravel server
    ```sh
    php artisan serve
