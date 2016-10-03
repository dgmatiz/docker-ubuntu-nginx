FROM rossriley/docker-nginx-pg-php
MAINTAINER Daniel Matiz

RUN apt-get update\
    && apt-get install -y vim
RUN mkdir /var/www/public
COPY index.php /var/www/public/ 

