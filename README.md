# dockerized-mosquitto-php

with PHP-FPM 7.3.2, Eclipse Mosquito 1.5.6 and NGINX (latest)

First Start</br>
`docker-compose up -d`

We need the Container ID from eclipse:mosquitto<br>
`docker ps`

Start Shell with Container ID from Step 2<br>
`docker exec -it CONTAINERID_ECLIPSE_MOSQUITTO /bin/ash`

Set Username & Password for Connections to Mosquitto (Anonymous is disabled)<br>
`mosquitto_passwd -b /mosquitto/config/passwd MYUSERNAME MYPASSWORD`

Restart docker Containers<br>
`docker-compose restart`

Mosquitto-PHP Documentation<br>

https://mosquitto-php.readthedocs.io/en/latest/index.html

## Source

https://github.com/klabeh/dockerized-mosquitto-php
