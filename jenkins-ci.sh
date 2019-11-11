#!/usr/bin/env sh

set -e

# init vars
export DB_HOST=172.16.90.11
export DB_PORT=30001
export DB_USER=root
export DB_PASS=secrets
export DB_NAME=ticket

export CONN_ARG="-h ${DB_HOST} -P ${DB_PORT} -u${DB_USER} -p${DB_PASS}"


# print build info
echo -e "\n${JOB_NAME} ${GIT_LOCAL_BRANCH:0:6} | Build ${GIT_COMMIT} ${BUILD_NUMBER}\n"

php -v
composer -V
phpunit --version

# init env
cp .env.jenkins .env

# composer install
composer install --no-interaction --prefer-dist --no-suggest

# create database
mysql ${CONN_ARG} -e "CREATE DATABASE ${DB_NAME}"

# init mysql db
php artisan migrate

# start testing
phpunit vendor/bin/phpunit

# clean up - database
mysql ${CONN_ARG} -e "DROP DATABASE ${DB_NAME}"

echo -e "\n Finish build!"
