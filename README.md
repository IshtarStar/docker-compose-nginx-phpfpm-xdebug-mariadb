# Docker compose PHP 8.4.5, Xdebug 3.4.1, Nginx 1.27.4, Redis 7.4.2 and MariaDB 11.7.2

![docker](https://img.shields.io/badge/Docker-compose-brightgreen.svg)
![nginx](https://img.shields.io/badge/nginx-1.27.4-brightgreen.svg)
![php](https://img.shields.io/badge/PHP_FPM-8.4.5-brightgreen.svg)
![xdebug](https://img.shields.io/badge/Xdebug-3.4.1-brightgreen.svg)
![phpunit](https://img.shields.io/badge/PHPUnit-11.4.3-brightgreen.svg)
![redis](https://img.shields.io/badge/Redis-7.4.2-brightgreen.svg)
![mariadb](https://img.shields.io/badge/MariaDB-11.7.2-brightgreen.svg)

# Goal of this project

The primary goal of this project is to create a streamlined and efficient development environment using Docker Compose. This environment will consist of PHP-FPM, Xdebug, PHPUnit, Redis, Nginx web server, and MariaDB, enabling developers to quickly and easily start working on their PHP projects.

# Services

* Easy setup with [docker compose](https://docs.docker.com/compose/) and [Dockerfile](https://docs.docker.com/engine/reference/builder/) under usage from [Docker](https://www.docker.com)
* Uses [PHP 8.4.5](https://www.php.net) for better performance, lower CPU and memory usage
* And [composer the dependency manager for PHP](https://getcomposer.org) to start easy your project
* Built on the lightweight [nginx 1.27.4](https://nginx.org) webserver
* Debugging with [Xdebug 3.4.1](https://xdebug.org)
* Testing with [PHPUnit 11.4.3](https://phpunit.de) to ensure code quality and reliability
* [Redis 7.4.2](https://redis.io) as session storage, database, cache, streaming engine, and message broker
* Database storage with [MariaDB 11.7.2](https://mariadb.org)

## Setup Instructions

1. **Clone the repository:**
   ```sh
   git clone https://github.com/IshtarStar/docker-compose-nginx-phpfpm-xdebug-mariadb.git ./docker-skeleton
   cd docker-skeleton
   ```

2. **Build and start the Docker containers:**
   ```sh
   docker compose up --build -d
   ```

3. **Install Composer dependencies:**
   ```sh
   docker compose exec -T php-fpm composer install
   ```

4. **Run PHPUnit tests with code coverage:**
   ```sh
   docker compose exec -T php-fpm ./vendor/bin/phpunit --coverage-text --testdox tests
   ```

## Example PHPUnit Test

An example PHPUnit test is included in the `tests` directory.

See also:
[Blog-Post: Dockerize your PHP application with Nginx and PHP8 FPM](https://marc.it/dockerize-application-with-nginx-and-php8/)
