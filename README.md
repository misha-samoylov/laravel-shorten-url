# laravel-shorten-url

Пример back-end проект для сокращения ссылок.

### Механика работы

Отправляем ссылку на POST endpoint и в ответ получаем сокращенную ссылку.

### Доступные endpoints

* `POST /api/v1/links`
* `GET /api/v1/links`
* `GET /docs/api`
* `GET /{hash}`
* `GET /`

### Используемое ПО

* [Docker / Docker Compose](https://www.docker.com/)
* [PHP 8.4](https://www.php.net/)
* [Laravel 12](https://laravel.com/)
* [nginx](https://nginx.org/)
* [MySQL 8.0](https://www.mysql.com/)
* [SQLite](https://sqlite.org/)
* [Scramble](https://github.com/dedoc/scramble) 

### Используется

* Контейнеризация
* Layered Architecture (Многослойная архитектура): Service, Repository
* Seeders
* Tests
* API документация

## Сборка и запуск

````shell
make build
````

Далее проект доступен по адресу [http://localhost:8080/](http://localhost:8080/).

На странице документации API [http://localhost:8080/docs/api](http://localhost:8080/docs/api) указаны все endpoints.

### Примечание

Для тестов:

````shell
make test
````

Для сидов:

````shell
make db:seed
````

## Протестировано

* Ubuntu 24.04.3 LTS
* Docker 29.3.0
