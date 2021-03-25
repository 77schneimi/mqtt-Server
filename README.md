# MQTT Server

with Eclipse Mosquito 

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

+ [eclipse Mosquitto](https://hub.docker.com/_/eclipse-mosquitto)
+ [Mosquitto-PHP](https://mosquitto-php.readthedocs.io/en/latest/index.html)
+ [dockerized-mosquitto-php](https://github.com/klabeh/dockerized-mosquitto-php)
