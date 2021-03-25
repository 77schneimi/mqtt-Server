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

### Listener

Since version 2 you have to define listener in the mosquitto.conf.

```sh
listener 1883 # all
listener 1883 127.0.0.1 # special ip address
```

## Test Client

For test, you can use a client like [MQTT Ecplorer](http://mqtt-explorer.com)

Use mqtt://127.0.0.1:1833

## some Docs

### Mosquitto-PHP Documentation

+ [eclipse Mosquitto](https://hub.docker.com/_/eclipse-mosquitto)
+ [Mosquitto-PHP](https://mosquitto-php.readthedocs.io/en/latest/index.html)
+ [dockerized-mosquitto-php](https://github.com/klabeh/dockerized-mosquitto-php)
