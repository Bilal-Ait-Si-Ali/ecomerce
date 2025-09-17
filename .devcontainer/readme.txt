##change name project

devcontaner > runArgs > project name
. env docker_name & docker_dev


##Setup Apache2 dev container

a2enmod rewrite

cp -r . /var/www/html

cp apache/laravel.conf /etc/apache2/sites-available/000-default.conf

chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
cd /var/www/html
##
git clone link
##
RUN composer install

RUN php artisan storage:link

service apache2 restart