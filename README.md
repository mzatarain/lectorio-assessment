




## Download repo:
git clone git@github.com:mzatarain/lectorio-assessment.git

## cd into lectorio-assessment 
cd lectorio-assessment/

## Execute docker-compose.yml content:
docker-compose up -d

## PHP app:
http://localhost:80

## Mongo-express:
http://localhost:8081

## Mysql adminer
http://localhost:8080

## To stop containers:

docker-compose down

## By defauld XDEBUG is disabled, To enable it:
docker compose build php

export=XDEBUG_ENABLED=1

docker-compose up -d