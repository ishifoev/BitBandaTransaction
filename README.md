## Transactions

First you need to be sure that PHP and MySQL install in your computer. For running server locally and saving information to database.

- PHP 7.3 minimum requirments
- MySQL it is depends of you 5.7 5.8
- Composer

1) You need to go your folder and run 

````
composer install
````

2) Be sure that you have create a database in MySQL and name it in your ````env```` file. Your username, password and database name.

3) Go to the transaction folder terminal and run to seed transactions table to your database. Seed working not from Laravel it is artisan additanal class working directly with your SQL file. I can say that in first project I used migration and created from scratch. For it I would like to do something with one command. This file you can find ````app/console/commands/MigrateDatabase.php````

````

php artisan migrate_database:migrate

````

4) Go again to your terminal and run locally your laravel project

````
php artisan serve
````

5) You can use curl request ot can use directly in your broswer you can run something like 

It is return all information from DB in json format. 

`````
http://localhost:8000/transactions?source=db
`````

It returns something that you don't have html valid information

`````
http://localhost:8000/transactions?source=html
`````

If you are forget to run your info you can get something that it is not set up
`````
http://localhost:8000/transactions?source=
`````

I can say the code that you need to see I have 2 services and one interfacce with one factory. You can find them in ````App/Services```` and interface in ````App/Contracts````. We have controller and you see the whole code that working with this logic.