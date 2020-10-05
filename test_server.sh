#sudo cp -r sensor-wiki /var/www/html/
sudo systemctl restart apache2
sudo service mariadb restart
sudo chmod 777 /var/www/html/sensor-wiki/images
sudo chown -R www-data:www-data /var/www/html/sensor-wiki/images/
