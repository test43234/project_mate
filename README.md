# Project Mate

This is project management application to manage your projects.

some useful docs:

- [Link to php module for firebase](https://cloud.google.com/php/grpc)
- [firebase docks](https://firebase.google.com/docs/firestore/quickstart)

#to build
```
cd docker;
docker-compose build --no-cache --force-rm --parallel;
```

install dependencies:
```
composer install
```

# to run the project
go into the directory:
```
cd docker
```
remove the volume created upon build:

```
docker volume rm twig_test_vendor
```

Run the containers:
```
docker-compose up
```

# run cli inside the docker env
```
docker exec -it --workdir /var/www/html --user http php-fpm /bin/bash
```

# or just run composer like this:
```
docker exec --workdir /var/www/html --user http php-fpm /usr/local/bin/composer install

```
