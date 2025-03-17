#!/bin/bash

sudo apt install mysql-server

sudo systemctl start mysql.service

sudo systemctl enable mysql

sudo mysql_secure_installation

sudo mysql -u root -p

CREATE USER 'vinit'@'%' IDENTIFIED BY 'Vinit_46';

GRANT ALL PRIVILEGES ON *.* TO 'vinit'@'%';

ALTER USER 'vinit'@'%' IDENTIFIED WITH mysql_native_password BY 'Vinit_46';

GRANT GRANT OPTION ON *.* TO 'vinit'@'%';

FLUSH PRIVILEGES;
EXIT;

sudo systemctl restart mysql