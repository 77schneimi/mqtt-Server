# MQTT Server

with Eclipse Mosquito 2.0.9 (Date 23/03/2021)

## How to run

```sh
docker-compose up -d
```

### set user and password

Set Username & Password for Connections to Mosquitto (Anonymous is disabled)
Create file _mosquitto.passwd_ in mqtt/config/

```sh
docker-compose exec mosquitto sh -c "mosquitto_passwd /mosquitto/config/mosquitto.passwd [YOUR_USER]"
```

Restart docker Containers

```sh
docker-compose restart
```

## Test Client

For test, you can use a client like [MQTT Ecplorer](http://mqtt-explorer.com)

## some Docs

### Mosquitto-PHP Documentation

+ https://mosquitto-php.readthedocs.io/en/latest/index.html

### Source

+ https://github.com/klabeh/dockerized-mosquitto-php
