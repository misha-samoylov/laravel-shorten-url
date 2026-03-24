S_PHP = php
S_MYSQL = mysql
S_NGINX = nginx

all: build

build:
	cp .env.example .env
	cp docker-compose.yml.example docker-compose.yml
	docker compose build
	docker compose up -d
	docker compose exec ${S_PHP} composer install
	docker compose exec ${S_PHP} php artisan key:generate
	docker compose exec ${S_PHP} php artisan migrate
	docker compose exec ${S_PHP} php artisan db:seed

test:
	docker compose exec ${S_PHP} php artisan test

seed:
	docker compose exec ${S_PHP} php artisan db:seed

shell:
	docker compose exec ${S_PHP} bash

clean:
	docker compose rm -s -f ${S_PHP}
	docker compose rm -s -f ${S_NGINX}
	docker compose rm -s -f ${S_MYSQL}
