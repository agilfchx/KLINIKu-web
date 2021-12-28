# KLINIKu
Sebuah website sederhana yang dimana kita bisa membuat janji dengan dokter gigi. Ditujukan untuk salah satu tugas besar mata kuliah web programming

## Inside Project
- Laravel 8.0
- Laravel Jetstream & Livewire
- Bootstrap 4.5

## Installation
Clone or download this repository
```shell
$ git clone https://github.com/agilfchx/KLINIKu
```

Install all dependencies
```shell
# install laravel dependency
$ composer install
```

Generate app key, configure `.env` file and do migration.
```shell
# generate app key
$ php artisan key:generate

# create copy of .env
$ cp .env.example .env

# migration
$ php artisan migrate:fresh
```
## Guest Template
- by [MACode.ID](https://macodeid.com/projects/one-health-medical-center-html5-template/)

``ignore/delete .htaccess in root folder``
