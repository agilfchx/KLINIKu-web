# KLINIKu
Sebuah website sederhana yang dimana kita bisa membuat janji dengan dokter gigi

## What inside?
- Laravel 8.0
- Laravel Jetstream 
- Laravel Livewire
- Bootstrap 4.5
- Bootstrap Icon

## Installation
Clone or download this repository
```shell
$ git clone https://github.com/Zzzul/for-um.git
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

## License
MIT
