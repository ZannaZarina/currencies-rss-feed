![demonstration](https://raw.githubusercontent.com/ZannaZarina/currencies-rss-feed/master/currencies.gif)

### How to run a project
1. Clone repository
2. cd into your project
3. Run ```composer install``` and ```npm install```
4. Create a copy of .env.example file by running ```cp .env.example .env```
5. To generate app encryption, run ```php artisan key:generate```
6. Create an empty database
7. In the .env file edit the DB_DATABASE, DB_USERNAME, and DB_PASSWORD fields
8. Migrate your database: ```php artisan migrate```
9. ```php artisan serve``` to run a project

### Description
* The main controller ```AllCurrenciesController``` uses an RSS feed that offers the latest currency exchange rates. First of all, the table always is truncated to avoid an accumulation of data, every time renewing it. Obtained data (currency name, value, and publishing date) is passed to a database. After that, there is a while loop that finds the latest rates stored in the database. Route ```'/'``` displays all that actual info with ```home``` view. 
* When clicked the currency or flag, the route ```'/{currency}'``` displays appropriate currency exchange rate history (few days) based on database data. Responsible for that are ```history``` view and ```RateHistoryController```.
