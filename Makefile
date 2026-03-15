build:
	cp .env.example .env
	cp docker-compose.yml.example docker-compose.yml
	docker compose build
	docker compose up -d
	docker compose exec php php artisan key:generate
	docker compose exec php composer install
	docker compose exec php php artisan migrate

test:
	docker compose exec php php artisan test

shell:
	docker compose exec php bash

migration:
	docker compose exec php php artisan migrate
