#!/bin/bash

docker run -d --name wordpress_shop -p 8000:80  -v /home/work/wordpress/dockershop_kang/src:/app mattrayner/lamp:latest-1604