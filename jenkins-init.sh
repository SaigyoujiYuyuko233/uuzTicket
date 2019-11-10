#!/usr/bin/env bash

# install php
yum -y install epel-release

rpm -Uvh https://mirror.webtatic.com/yum/el7/epel-release.rpm
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm

yum install php71w-cli php71w-common php71w-mbstring php71w-mcrypt php71w-mysql php71w-pdo -y


# install phpunit
wget https://phar.phpunit.de/phpunit-8.4.3.phar -O /usr/local/bin/phpunit
chmod -x /usr/local/bin/phpunit

# install composer
wget https://getcomposer.org/download/1.9.1/composer.phar -O /usr/local/bin/composer
chmod -x /usr/local/bin/composer

# install mysql client
rpm -ivh https://repo.mysql.com//mysql57-community-release-el7-11.noarch.rpm
yum install mysql-community-client -y
