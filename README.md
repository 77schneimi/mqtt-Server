# MQTT Server

with Eclipse Mosquito 1.5.6

## How to run

```sh
docker-compose up -d
```

### set user and password

Set Username & Password for Connections to Mosquitto (Anonymous is disabled)
Create file _mosquitto.passwd_ in mqtt/config/

```sh
mosquitto_passwd -b /mqtt/config/mosquitto.passwd MYUSERNAME MYPASSWORD
```

Restart docker Containers

```sh
docker-compose restart
```

## some Docs

### Mosquitto-PHP Documentation

+ https://mosquitto-php.readthedocs.io/en/latest/index.html

### Source

+ https://github.com/klabeh/dockerized-mosquitto-php
