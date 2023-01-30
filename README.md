# Phone Book app

![Alt text](/public/images/home.png "Phone Book App")
![Alt text](/public/images/edit.png "Phone Book App")
![Alt text](/public/images/add.png "Phone Book App")

## Usage

### Database Setup
This app uses MySQL. 

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

## Database
For example

````
CREATE DATABASE `PhoneBookApp`;
````

### Composer
cd to the root directory and run 

````
composer install

````

### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```


