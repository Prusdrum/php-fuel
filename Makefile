install:
	docker-compose exec -u $(id -g):$(id -u) php composer install -d /var/www/html/app