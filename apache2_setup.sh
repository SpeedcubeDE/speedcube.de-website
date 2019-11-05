#!/bin/bash
parent_path=$( cd "$(dirname "${BASH_SOURCE[0]}")" ; pwd -P )
ln -s "${parent_path}/www" /var/www/speedcube
echo "
<VirtualHost *:80>
        ServerName speedcube.de
        ServerAlias www.speedcube.de
        DocumentRoot /var/www/speedcube
        <Directory \"/var/www/speedcube\">
                AllowOverride All
        </Directory>
</VirtualHost>
" > /etc/apache2/sites-available/speedcube.conf
a2ensite speedcube
a2enmod rewrite
