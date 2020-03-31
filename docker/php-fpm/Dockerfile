FROM archlinux/base

ENV TZ=Europe/Budapest
RUN pacman --noconfirm -Sy archlinux-keyring; \
	yes | pacman -Syyu; \
	pacman-db-upgrade;\
	ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone ;

RUN pacman --noconfirm -Syu vim man

RUN pacman --noconfirm -Syu base-devel

RUN pacman --noconfirm -Syu php php-fpm php-memcached php-gd autoconf m4 grep ; \
	mkdir  -p /var/www/html/; \
	chmod 777 /tmp; 

RUN curl -O https://pear.php.net/go-pear.phar; \
  /usr/bin/php -d detect_unicode=0 go-pear.phar
RUN pacman --noconfirm -Syu php-grpc ;

RUN pecl install grpc;
RUN curl -sS https://getcomposer.org/installer | php; \
      mv composer.phar /usr/local/bin/composer

COPY composer.json /var/www/html/
COPY ./docker/php-fpm/config/php/php.ini /etc/php/

RUN mkdir -p /var/www/html/public; \
    cd /var/www/html/; \
    chown http:http /var/www/html -R; \
    chown http:http /srv/http/ -R; 

WORKDIR /var/www/html
USER http
RUN  /usr/local/bin/composer install;

USER root
CMD ["/usr/sbin/php-fpm", "-F"]
