# Laravel E-commerce API Using Passport Authentication

## About Project

This is a Laravel-8 API project for ordering an item by an user in ecommerce website. here for api we use laravel passport. In this project you are gonna get passport authentication and product ordering system by an user with user and product details.This project is PHP 7.4 and laravel- 8 version.
## Project run step

### step-1:
If you PHP version is 7.4+ then you have to reinstall your PHP version in below 7.4.

first download the project. 

### step-2:
create a database on phpmysql and connect this database in the project .env file.

### step-3:
open your teminal and in your terminal run- 

composer update

php artisan migrate:fresh

php artisan passport:install --force

php artisan db:seed

### step-4:
Also, if you are using Postman then you can follow the link to see the api route documentetion 

https://documenter.getpostman.com/view/21359480/2s847BUwN3


