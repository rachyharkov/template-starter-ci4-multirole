# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## And why this repository exists? starter? Multirole? what does it mean?

This repository is a fork of the official repository of CodeIgniter 4, but with some changes, such as:

- UI Template using Mazer Admin Template - [Check Here](https://github.com/zuramai/mazer)
- User Authentication System
- Visitor and Admin Splitted Code for easy maintainability (For those who want to make a website with visitor access and admin access)
- Multirole System
- Menu access based on role
- User Management System

## Installation & Setup

- Clone this repository
- Setup env, only need :
- - `CI_ENVIRONMENT` to `development`
- - `app.baseURL` to your base url, mine is `http://localhost:8080`
- - `database.default` to your database configuration
- Run `composer install`
- Run `php spark migrate` and `php spark db:seed SeedAll`
- Run `php spark serve` to run the application
- Open `http://localhost:8080` in your browser


## Important

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages and FEATURE REQUESTS.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> **Warning**
> The end of life date for PHP 7.4 was November 28, 2022. If you are
> still using PHP 7.4, you should upgrade immediately. The end of life date
> for PHP 8.0 will be November 26, 2023.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
