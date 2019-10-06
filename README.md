# docker-lamp-template
Docker template with LAMP stack (Apache, MySql, Php and PhpMyAdmin)

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

## Deploy to Heroku
(...pending...)