#!/bin/bash

sudo apt install mysql-server

sudo systemctl start mysql.service

sudo systemctl enable mysql

sudo mysql_secure_installation

sudo mysql -u root -p

CREATE USER 'your_username'@'%' IDENTIFIED BY 'your_password';

GRANT ALL PRIVILEGES ON *.* TO 'your_username'@'%';

ALTER USER 'username'@'%' IDENTIFIED WITH mysql_native_password BY 'your_password';

GRANT GRANT OPTION ON *.* TO 'username'@'%';

FLUSH PRIVILEGES;
EXIT;

sudo systemctl restart mysql