<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

docker-compose up -d

## About Laravel ecom

a2enmod rewrite \
&& cp -r . /var/www/html \
&& cp apache/laravel.conf /etc/apache2/sites-available/000-default.conf \
&& chown -R www-data:www-data /var/www/html \
&& chmod -R 755 /var/www/html \
&& cd /var/www/html

composer install \
&& php artisan storage:link \
&&service apache2 restart

e-commerce


php artisan migrate

php artisan db:seed

php artisan serve

