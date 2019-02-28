install:
	@# set user as your current host user to avoid installing dependencies as root
	docker-compose exec -u $(id -g):$(id -u) php composer install -d /var/www/html/app