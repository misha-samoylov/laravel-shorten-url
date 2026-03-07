# laravel-shorten-url

Проект для сокращения ссылок. Отправляем ссылку на соотв. адрес и в ответ получаем адрес по которому можно будет получить эту же ссылку но уже сокращенную.

Доступные endpoints:
````
POST /api/v1/links (params: redirect)
GET /api/v1/links
````

Используется ПО:
* PHP 8.2
* MySQL
* Laravel 12
* sqlite (for testing)
* Docker, Docker Compose

По коду:
* Layered Architecture (Многослойная архитектура): Service, Repository
* Seeders, Tests

## Сборка и запуск

````
make run
````

## Требуется для сборки

* Docker
* Docker Compose

## Проверено на

* Ubuntu 24.04.3 LTS
* Docker version 29.1.5
