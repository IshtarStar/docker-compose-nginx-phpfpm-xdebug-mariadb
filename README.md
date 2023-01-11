# Docker compose PHP FPM 8.2.1, Redis 7.0.7, Xdebug 3.2.0RC1, Nginx 1.23.3, and MariaDB 10.10.2

![docker](https://img.shields.io/badge/Docker-compose-brightgreen.svg)
![php](https://img.shields.io/badge/PHP_FPM-8.2.1-brightgreen.svg)
![redis](https://img.shields.io/badge/Redis-7.0.7-brightgreen.svg)
![xdebug](https://img.shields.io/badge/Xdebug-3.2.0RC1-brightgreen.svg)
![nginx](https://img.shields.io/badge/nginx-1.23.3-brightgreen.svg)
![mariadb](https://img.shields.io/badge/MariaDB-10.10.2-brightgreen.svg)

* Easy setup with [docker-compose](https://docs.docker.com/compose/) and [Dockerfile](https://docs.docker.com/engine/reference/builder/) under usage from [Docker](https://www.docker.com)
* Built on the lightweight [nginx 1.23.3](https://nginx.org) webserver
* Uses [PHP 8.2.1](https://www.php.net) for better performance, lower CPU and memory usage
* [Redis 7.0.7](https://redis.io) as session storage, database, cache, streaming engine, and message broker
* And [composer the dependency manager for PHP](https://getcomposer.org) to start easy your project
* Debugging with [Xdebug 3.2.0RC1](https://xdebug.org)
* Database storage with [MariaDB 10.10.2](https://mariadb.org)

See also:
[Blog-Post: Dockerize your PHP application with Nginx and PHP8 FPM](https://marcit.eu/en/2021/04/28/dockerize-webserver-nginx-php8/)