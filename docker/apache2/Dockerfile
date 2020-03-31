FROM archlinux/base

ENV TZ=Europe/Budapest
RUN pacman --noconfirm -Sy archlinux-keyring; \
	yes | pacman -Syyu; \
	pacman-db-upgrade;\
	ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone ;

RUN pacman --noconfirm -S apache ;\
	mkdir -p /var/log/apache2; \
	mkdir -p /var/www/html/; \
	mkdir -p /etc/httpd/vhosts; 
	
RUN touch /var/log/apache2/apache_err.log; \
      chown http:http /var/log/apache2/apache_err.log;

RUN pacman --noconfirm -S vim man

EXPOSE 80

CMD ["/usr/sbin/httpd", "-DFOREGROUND"]
