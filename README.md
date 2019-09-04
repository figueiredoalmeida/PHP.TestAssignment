# Linkfire PHP assignment
The code and objectives of this coding assignment are set up to emulate the basic structure of Linkfire's Redirector project, the platform responsible for routing visitors and generating our iconic music and ticket landing pages.

This is a dockerized MVC application based on Phalcon PHP, and the tasks are designed to take you around the basic principles of working with the platform. 

We will evaluate you on the following parameters:
* Ability to write code that is clean, readable and easy to maintain.
* Ability to understand the principles of, and organising an MVC project.
* Ability to recognize where a pattern/principle could be used, and the ability to apply this pattern/principle.
* Ability to organize and document your code.
* Ability write good and clear unit tests.

To make evaluation easier, please fork this repository on your personal Github account and create a pull request when finished.

Expected time to solve this assignment is 2 to 4 hours.

## Tasks
1. Create a service with a function that returns a model.
2. Call the service function from controller and output the model as JSON.
3. Add routing and controller actions to support different url structures.
4. Get service from DI container in controller instead of doing `new Service()`.
5. Write unit tests for the service function.

## How to set up project to run locally

### Requirements
* Docker
* Docker-compose

### Setup
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

# e.g. 
# docker run --rm -v ${PWD}:/var/www/html phptestassigment_php vendor/bin/phpunit --testdox
```
