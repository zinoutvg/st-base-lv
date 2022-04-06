<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Commands

# Frontend
[x] Create new controller
```
>> php artisan make:controller NameController
```
[x] Install bootstrap
```
>> composer require laravel/ui
>> php artisan ui bootstrap
>> npm install bootstrap@latest bootstrap-icons @popperjs/core --save-dev
>> npm install
>> npm run dev
>> npm run dev <--- (twice)
```
[x] If change sass/_variables.scss, type following command after save changes:
```
>> npm run dev
```
[x] After install Bootstrap, custom styles should to be inserted into resources/sass/app.scss and type following command after save changes:
```
>> npm run dev
```

# Backend
[x] Create models
```
>> php artisan make:model Users
```

# Database
[x] Connection to remote database should to write params into double quote (") in .env file:
```
DB_USERNAME="username"
DB_PASSWORD="password"

```

## Improvements
[x] Adding custom domain in hosts system operative:
```
Edit C:\Windows\System32\drivers\hosts

# Localhost
192.168.1.3 hp.com
```
[x] Adding custom domain in apache config:
```
Edit C:\xampp\apache\conf\extra\httpd-vhosts.conf

NameVirtualHost *
<VirtualHost *>
  DocumentRoot "C:\xampp\htdocs"
  ServerName localhost
</VirtualHost>

<VirtualHost *>
  DocumentRoot "C:\xampp\htdocs\laravel-base\public"
  ServerName hp.com
  <Directory "C:\xampp\htdocs\laravel-base\public">
    Options All
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>
```