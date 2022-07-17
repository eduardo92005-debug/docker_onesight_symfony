# Getting started
## Prerequisites
- Docker Desktop/Docker
- Symfony 5.4
## Installation
Download this code repository
Open terminal/cmd inside folder repository, so use command 
```
docker compose build
docker compose up
```
After that, use
```
docker compose exec php /bin/bash
composer update
```
Now that's it, check if server is running in localhost:8080/, you'ld see symfony version text.
Now it's time to load database and fixtures
```
php bin/console doctrine:migrations:migrate
```
If it fail, use:
```
php bin/console doctrine:schema:update --force
```
To finish:
```
php bin/console doctrine:fixtures:load
```
So it's OKAY! Now you can navigate through website!
## MySQL
To access mysql database, use:
```
docker compose exec database mysql -u{MYSQL_USER} -p{MYSQL_PASSWORD}
```
Remember to change {MYSQL_USER} and {MYSQL_PASSWORD} to the env variables in docker-compose.yaml
## Routes
```
localhost:8080/view/event - Check approved events!
localhost:8080/create/event - Create an event deny or approve it!
localhost:8080/confirmation/event - A confirmation token to confirm that you've created an event!
```
## Bundles used
- Doctrine/ORM
- Annotation
- Twig
- Faker
- Fixtures
- Maker-bundle
- Symfony Form
- Bootstrap
- Pleasant BEM/CSS
## Docker Images
- Mysql:8.0
- Nginx server
- PHP 7.4
## Tech used
- Heroku
- Docker/Docker Compose
- MySQL
- Doctrine
- Frontend
- Git
