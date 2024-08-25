# Healthcheck

I think it should be possible to configure another listener that only listen to localhost and have allow_anonymous true.
This way you don't need a username/password for the probes but retain required authentication from remote connections.

Something like this (very untested config)

```conf
persistence true
persistence_location /mosquitto/data
log_dest file /mosuqitto/log/mosquitto.log

per_listener_settings true

listener 1883 0.0.0.0
allow_anonymous false
password_file /mosquitto/config/pwfile

# why have this listener?
# listener 9001

listener 1880 127.0.0.1
allow_anonymous true
```

then you could use mosquitto sub as a probe check without password:
`mosquitto_sub -p 1880 -t 'topic' -C 1 -E -i probe -W 3``
(Also untested)

```yml
healthcheck:
      test: ["CMD", "mosquitto_sub", "-t", "$$SYS/#", "-C", "1", "-i", "healthcheck", "-W", "3"]
      interval: 30s
      timeout: 10s
      retries: 5
      start_period: 20s
```

<https://github.com/eclipse/mosquitto/issues/1270>