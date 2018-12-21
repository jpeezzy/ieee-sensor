sudo cp -r sensor-wiki /var/www/html/
/etc/init.d/apache2 restart
sudo chmod 777 /var/www/html/sensor-wiki/images
sudo chown -R www-data:www-data /var/www/html/sensor-wiki/images/
