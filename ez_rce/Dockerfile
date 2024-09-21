FROM ctftraining/base_image_nginx_mysql_php_56

COPY src/index.php /var/www/html
COPY src/flag /flag
COPY files/flag.sh /flag.sh

RUN chown -R www-data:www-data /var/www/html