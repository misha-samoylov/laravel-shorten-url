run:
	docker compose build

test:
	docker compose exec php php artisan test

shell:
	docker compose exec php /bin/sh

docs:

