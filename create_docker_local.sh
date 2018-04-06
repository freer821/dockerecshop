#!/bin/bash

docker run -d --name wordpress_kang -p 80:80  -v /home/ubuntu/work/docker/dockerecshop/src:/app mattrayner/lamp:latest-1604