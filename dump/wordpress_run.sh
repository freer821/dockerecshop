#!/bin/bash

echo "beginning to import wordpress database"
mysql -e "CREATE DATABASE wordpress /*\!40100 DEFAULT CHARACTER SET utf8 */;"
mysql -u root wordpress < /app/mysql/wordpress_run.sql
echo "import wordpress database end!"