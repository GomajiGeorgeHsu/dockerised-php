#FROM docker03.gomaji.com/alpine/alpine-php-fpm:7.4-edge
FROM alpine:3.14

RUN apk --no-cache --progress --repository http://dl-cdn.alpinelinux.org/alpine/edge/community add \
    php7 \
    php7-fpm \
    php7-curl \
    php7-json \
    php7-openssl \
    php7-mbstring \
    php7-mcrypt \
    php7-opcache \
    php7-iconv \
    php7-ctype \
    php7-gd

## Install S6-Overlay
RUN apk update && apk upgrade && \
    apk add --no-cache curl tzdata procps htop && \
    cp /usr/share/zoneinfo/Asia/Taipei /etc/localtime && \
    curl -L -s https://github.com/just-containers/s6-overlay/releases/download/v1.20.0.0/s6-overlay-amd64.tar.gz \
    | tar xvzf - -C /

COPY ./docker-files/config /

ENTRYPOINT ["/init"]

# # 確認 php 版本為 7.4.x
# ARG PHP_VERSION=7.4
# RUN php -v | head -n 1 | grep -q "PHP ${PHP_VERSION}."

# COPY docker-files/conf_php /home/httpd/conf_php/

# COPY . /app

# WORKDIR /app
