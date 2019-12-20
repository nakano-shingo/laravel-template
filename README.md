# Basic-api

## Build Setup
```bash
# install
docker-compose build

# up
docker-compose up
docker-compose up -d

# down
docker-compose down

# restart
docker-compose restart
```

## DB migrate
```bash
docker-compose exec app bash
root@xxxxxxxxx:/var/www/html#  php artisan migrate
```
