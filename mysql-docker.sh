#!/bin/bash
# Restore
cat ./dump/wp-kang.sql | sudo docker exec -i 322ba4a114ab /usr/bin/mysql -u root --password=root123@#  wordpress
# Backup
sudo docker exec 14eb22c82c03 /usr/bin/mysqldump -u root --password=root123@# wordpress > wp-kang_4.sql
