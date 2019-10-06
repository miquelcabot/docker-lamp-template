# docker-lamp-template
Docker template with LAMP stack (Apache, MySql, Php and PhpMyAdmin)

## Prerequisites
Prerequisites to run this application:
* Docker ([https://docs.docker.com/install/](https://docs.docker.com/install/))

## Run and stop the containers 
To run these containers:
```
docker-compose up
```
or
```
docker-compose up -d
```

To stop containers and remove containers, networks, volumes, and images created by up:
```
docker-compose down
```

## Run the PHP application
To run the application you must:
* Open phpMyAdmin at [http://localhost:8081](http://localhost:8081).
* Open simple PHP web application example at [http://localhost:8080](http://localhost:8080)

## Bash shell
To execute an interactive bash shell on the `www`, `db` or `phpmyadmin` containers:
```
docker-compose exec www bash
docker-compose exec db bash
docker-compose exec phpmyadmin bash
```

## Run MySql client
To run the MySQL client:
```
docker-compose exec db mysql -u root -p
```
or
```
docker-compose exec db bash
mysql -u root -p
```

## Deploy to Heroku
(...pending...)