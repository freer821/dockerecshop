#!/bin/bash

#docker build . -t wordpress_kang
docker run -d --name wordpress_kang -p 80:80 wordpress_kang
echo "sleep 5s"
#sleep 5s
#docker exec -it wordpress_kang /app/mysql/wordpress_run.sh