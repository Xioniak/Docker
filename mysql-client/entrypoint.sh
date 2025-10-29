#!/bin/bash
set -e

echo "Wait for database ${MYSQL_HOST}..."

until mysqladmin ping -h"$MYSQL_HOST" --silent; do
    sleep 2
done

echo "Database is available, executing SQL script"
mysql -h"$MYSQL_HOST" -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" < /app/script.sql