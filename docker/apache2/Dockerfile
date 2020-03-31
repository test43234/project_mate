FROM archlinux/base

ENV TZ=Europe/Budapest
RUN pacman --noconfirm -Sy archlinux-keyring; \
	yes | pacman -Syyu; \
	pacman-db-upgrade;\
	ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone ;

RUN pacman --noconfirm -S apache ;\
	mkdir -p /var/log/apache2; \
	mkdir -p /var/www/html/; \
	mkdir -p /etc/httpd/conf/vhosts; 

RUN pacman --noconfirm -S vim man

COPY httpd.conf /etc/httpd/conf/
COPY vhosts/bootstrap.conf.vhost /etc/httpd/conf/vhosts/

EXPOSE 80

CMD ["/usr/sbin/httpd", "-DFOREGROUND"]
