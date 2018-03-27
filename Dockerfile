FROM mattrayner/lamp:latest-1604

RUN rm -fr /app/* && mkdir /app/mysql

COPY src/ /app
COPY dump/wordpress_run.sql /app/mysql/wordpress_run.sql
COPY dump/wordpress_run.sh /app/mysql/wordpress_run.sh

EXPOSE 80
CMD ["/run.sh"]