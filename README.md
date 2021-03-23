# Metronic 7 + Laravel 8

### Introduction

...

### Installation

Laravel has a set of requirements in order to ron smoothly in specific environment. Please see [requirements](https://laravel.com/docs/7.x#server-requirements) section in Laravel documentation.

Metronic similarly uses additional plugins and frameworks, so ensure You have [Composer](https://getcomposer.org/) and [Node](https://nodejs.org/) installed on Your machine.

Assuming your machine meets all requirements - let's process to installation of Metronic Laravel integration (skeleton).

1. Open in cmd or terminal app and navigate to this folder
2. Run following commands

```bash
composer install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```bash
npm install
```

```bash
npm run dev
```

After Compile template
check in .env, find & change:

```bash
SEEDER_FIIRST=false to SEEDER_FIIRST=true 
```

Note: if you want to use default user and database configuration

run this command for migrate default configuration database

```bash
php artisan migrate:fresh --seed
```

```bash
php artisan serve
```

And navigate to generated server link (http://127.0.0.1:8000)

```bash
username: superadmin
password: P@ssw0rd
```

Done! u can use my Base Application

### Copyright

Created By [Farhan Riuzaki](https://www.linkedin.com/in/farhanriuzaki/) Jakarta, 23 March 2021
