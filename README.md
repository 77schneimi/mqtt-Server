# MQTT Server

Running [eclipse moquitto](https://hub.docker.com/_/eclipse-mosquitto) in docker container.
>Version: 2.0.9

## SetUp

First run docker `docker-compose up -d`

### Set user and password

Set Username & Password for Connections to Mosquitto (Anonymous is disabled). Create empty file _mosquitto.passwd_ in mqtt/config/

```sh
docker-compose exec mosquitto sh -c "mosquitto_passwd /mosquitto/config/mosquitto.passwd [YOUR_USER]"
```

Restart docker Containers

```sh
docker-compose restart
```

### Listener

Since version ^2 you have to define listener in the mosquitto.conf.

```sh
listener 1883 # all
listener 1883 127.0.0.1 # special ip address
```

## Clients

You can use a client like [MQTT Ecplorer](http://mqtt-explorer.com)

Use protocoll and ip: _mqtt://127.0.0.1:1833_

## some Docs

### Mosquitto-PHP Documentation

+ [Mosquitto-PHP](https://mosquitto-php.readthedocs.io/en/latest/index.html)
+ [dockerized-mosquitto-php](https://github.com/klabeh/dockerized-mosquitto-php)