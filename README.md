# Note manager
## About this project:
An exercise project for __Laravel (v8)__ Framework.

This project is a simple note management system where users can save their notes after registering. It is also possible to categorize the notes into different categories and adding some tags to each note.

this project using:
* __Laravel Sail__ and it has a **Docker** container.
* __Laravel Livewire__ for it's front-end components.
* __Laravel Jetstream__ for authentication.
* **MySql** Database.

## How to install and run

because this project using **Laravel Sail** you can run this project with sail commands or installing required packages locally.

for running the project via **Laravel Sail** do the following steps (based on [Laravel Sail Documentation](https://laravel.com/docs/8.x/sail#installing-composer-dependencies-for-existing-projects)):
- clone the project and cd into it
- install required php packages by running:
```sh
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```
- install and run docker containers:
```sh
./vendor/bin/sail up -d
```
you can use an alias for `./vendor/bin/sail` to execute Sail's commands more easily. for more information see Laravel Documentation for [alias](https://laravel.com/docs/8.x/sail#configuring-a-bash-alias).

- install npm packages:
```sh
./vendor/bin/sail npm install
```
- make `.env` file based on `.env.example`
- generate project key:
```sh
./vandor/bin/sail artisan key:generate
```
