# MQTT Server

- [MQTT Server](#mqtt-server)
  - [General](#general)
  - [Setup](#setup)
    - [Environment](#environment)
  - [Docker Start](#docker-start)
    - [1. Set user and password](#1-set-user-and-password)
    - [2. Config File](#2-config-file)
      - [Listeners](#listeners)
      - [Logging](#logging)
  - [Clients](#clients)

## General

[MQTT Server](#mqtt-server) > [This section](#general)

Running [eclipse mosquitto](https://hub.docker.com/_/eclipse-mosquitto) in docker container.

## Setup

[MQTT Server](#mqtt-server) > [This section](#setup)


### Environment

[MQTT Server](#mqtt-server) > [Setup](#setup) > [This section](#environment)


Copy the example `.env-example` file and rename to `.env`. Adjust the File Content to your environment

## Docker Start

[MQTT Server](#mqtt-server) > [This section](#docker-start)

First run docker `docker-compose up -d` to start MQTT Server.

### 1. Set user and password

[MQTT Server](#mqtt-server) > [Docker Start](#docker-start) > [This section](#1-set-user-and-password)

Set Username & Password for secure Connections to MQTT-Server. Anonymous Connections were disabled.

Create empty file _mosquitto.passwd_ in mqtt/config/

```sh
docker compose exec mosquitto sh -c "mosquitto_passwd /mosquitto/config/mosquitto.passwd [YOUR_USER]"
```

Restart docker Container:

```sh
docker-compose restart
```

### 2. Config File

[MQTT Server](#mqtt-server) > [Docker Start](#docker-start) > [This section](#2-config-file)

Set the configuration in the mosquitto.conf file.

#### Listeners

[MQTT Server](#mqtt-server) > [Docker Start](#docker-start) > [Config File](#2-config-file) > [This section](#listeners)

Since version ^2 you have to define listener in the mosquitto.conf.

```sh
listener 1883 # all
listener 1883 127.0.0.1 # explicit ip address
```

#### Logging

[MQTT Server](#mqtt-server) > [Docker Start](#docker-start) > [Config File](#2-config-file) > [This section](#logging)

``` sh
log_type error
log_type warning
# log_type notice  # --> no logging
# log_type information # --> no logging
log_type subscribe
log_type unsubscribe
```

> In case of troubleshooting look at the Log File. Maybe you have to grant access by CMD `sudo chmod777 mosquitto.log`.

## Clients

[MQTT Server](#mqtt-server) > [This section](#clients)

You can use a client like [MQTT Explorer](http://mqtt-explorer.com) for test.

Use protocol and IP: _mqtt://0.0.0.0:1883_

or if configured:
Use protocol and IP: _mqtt://127.0.0.1:1883_
