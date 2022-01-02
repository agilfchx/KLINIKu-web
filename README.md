# KLINIKu
Sebuah website sederhana yang dimana kita bisa membuat janji dengan dokter gigi. Ditujukan untuk salah satu tugas besar mata kuliah web programming

## Inside Project
- Laravel 8.0
- Laravel Jetstream & Livewire
- Bootstrap 4.5

## Demo
[KLINIKu](http://klinikudental.herokuapp.com/)
/login -> untuk masuk login page
/admin-dashboard -> untuk masuk admin dashboard

``admin@email.com | password`` 

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
# create copy of .env
$ cp .env.example .env

# generate app key
$ php artisan key:generate

# migration
$ php artisan migrate:fresh
```
## Guest Template
- by [MACode.ID](https://macodeid.com/projects/one-health-medical-center-html5-template/)

``ignore/delete .htaccess in root folder``
