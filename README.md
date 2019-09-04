# Linkfire PHP assignment

## Tasks
- Create service with function that returns a model
- Call function on service from controller and output model as json
- Add routing and controller actions to support different url structures
- Get service from DI container in controller instead of doing new Service()
- Write unit test for service function

## How to set up project to run locally

### Requirements
* Docker
* Docker-compose

### Steps
clone repository to <PATH_TO_REPO_ROOT>

Run the following commands
```zsh
docker-compose build
```
```zsh
docker run -v ${PWD}:/app -w /app composer:latest composer install --ignore-platform-reqs --no-scripts --no-interaction --prefer-dist --optimize-autoloader
```
```zsh
docker-compose up
```

project is now available on http://localhost:80/

### Running tests
```zsh
docker run --rm -v ${PWD}:/var/www/html <php_image_name> vendor/bin/phpunit --testdox
```
