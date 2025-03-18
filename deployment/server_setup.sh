#!/bin/bash

sudo apt update

# Install server for PHP
sudo apt install apache2
sudo systemctl status apache2
sudo apt install php libapache2-mod-php
sudo systemctl restart apache2

cd /var/www/html

# Change ownership of /var/www/html
sudo chown -R ubuntu:ubuntu /var/www/html

# now get the user name and project name from user
echo "Please enter the user name:"
read USER_NAME
echo "Please enter the project name:"
read PROJECT_NAME
sudo git clone "https://github.com/$USER_NAME/$PROJECT_NAME.git"