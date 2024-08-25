# MQTT Server

- [MQTT Server](#mqtt-server)
  - [General](#general)
  - [SetUp](#setup)
  - [Enviroment](#enviroment)
  - [Docker Start](#docker-start)
    - [1. Set user and password](#1-set-user-and-password)
    - [2. Config File](#2-config-file)
      - [Listeners](#listeners)
      - [Logging](#logging)
  - [Clients](#clients)

## General

Running [eclipse moquitto](https://hub.docker.com/_/eclipse-mosquitto) in docker container.

## SetUp

## Enviroment

Copy the example `.env-example` file and rename to `.env`. Adjust the File Content to your enviroment

## Docker Start

First run docker `docker-compose up -d` to start MQTT Server.

### 1. Set user and password

Set Username & Password for secure Connections to MQTT-Server. Anonymous Connections was disabled.

Create empty file _mosquitto.passwd_ in mqtt/config/

```sh
docker-compose exec mosquitto sh -c "mosquitto_passwd /mosquitto/config/mosquitto.passwd [YOUR_USER]"
```

Restart docker Container:

```sh
docker-compose restart
```

### 2. Config File

Set the configuration in the mosquitto.conf file.

#### Listeners

Since version ^2 you have to define listener in the mosquitto.conf.

```sh
listener 1883 # all
listener 1883 127.0.0.1 # explicit ip address
```

#### Logging

``` sh
log_type error
log_type warning
# log_type notice  # --> no logging
# log_type information # --> no logging
log_type subscribe
log_type unsubscribe
```

## Clients

You can use a client like [MQTT Ecplorer](http://mqtt-explorer.com) for test.

Use protocoll and ip: _mqtt://0.0.0.0:1833_

or if configured:
Use protocoll and ip: _mqtt://127.0.0.1:1833_
