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

RUN curl -sS https://getcomposer.org/installer | php; \
      mv composer.phar /usr/local/bin/composer

COPY php.ini /etc/php
COPY memcached.ini /etc/php/conf.d/

CMD ["/usr/sbin/php-fpm", "-F"]
