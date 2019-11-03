echo "
<VirtualHost *:80>
        ServerName speedcube.de
        ServerAlias neu.speedcube.de
        DocumentRoot /var/www/speedcube
        <Directory \"/var/www/speedcube\">
                AllowOverride All
        </Directory>
</VirtualHost>
" > /etc/apache2/sites-available/speedcube.conf
a2ensite speedcube
a2enmod rewrite
