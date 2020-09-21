# Poppleton Dog Show

A simple Laravel app to illustrate CRUD operations on a single model.


## Environment and Config

`$ cp .env.example .env`

The following settings are required:

- A database connection, with username and password. 
  MySQL or MariaDB are fine. [XAMPP](https://www.apachefriends.org/index.html)
  recommended.
- Account details for [Mailtrap](https://mailtrap.io/)
- A URL for a free account at [Fontawesome](https://fontawesome.com/)

## Initialisation

`$ php artisan key:generate`

`$ php artisan migrate:fresh --seed`

## Startup

`$ php artisan serve`

App will be available at the URI displayed.
