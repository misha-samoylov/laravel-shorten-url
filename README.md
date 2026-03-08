# laravel-shorten-url

Back-end проект для сокращения ссылок.

### Механика работы

Отправляем ссылку на соотв. endpoint и в ответ получаем сокращенную ссылку.

### Доступные endpoints

* POST /api/v1/links
* GET /api/v1/links
* GET /docs/api
* GET /{hash}
* GET /

### Используемое ПО

* ЯП: [PHP 8.2](https://www.php.net/)
* Фреймворк : [Laravel 12](https://laravel.com/)
* СУБД: [MySQL 8.0](https://www.mysql.com/)
* СУБД для тестрования: [SQLite](https://sqlite.org/)
* API документация: [Scramble](https://github.com/dedoc/scramble) 

### Используется в коде

* Layered Architecture (Многослойная архитектура): Service, Repository
* Seeders
* Tests
* API документация

## TODO

Как появится больше времени добавлю:

* Docker, Docker Compose
* Makefile

## Сборка и запуск

````
php artisan serve
````

Далее проект доступен по адресу [http://localhost:8000/](http://localhost:8000/).

На странице документации API [http://localhost:8000/docs/api](http://localhost:8000/docs/api) указаны все endpoints.

### Примечание

Для тестов:

````
php artisan test
````

Для сидов:

````
php artisan db:seed
````

## Протестировано

* Ubuntu 24.04.3 LTS
