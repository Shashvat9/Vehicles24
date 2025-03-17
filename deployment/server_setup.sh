#!/bin/bash

sudo apt update

# now install server for PHP

sudo apt install apache2

sudo systemctl status apache2

sudo apt install php libapache2-mod-php

sudo systemctl restart apache2

cd /var/www/html

git clone git@github.com:VineetS46/Vehicles24.git