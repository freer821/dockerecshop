#!/bin/bash
# Restore
cat ./dump/ecshop.sql | docker exec -i 322ba4a114ab /usr/bin/mysql -u root --password=root123@#  ecshop
# Backup
#docker exec CONTAINER /usr/bin/mysqldump -u root --password=root DATABASE > backup.sql
