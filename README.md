# MQTT Server

Running [eclipse moquitto](https://hub.docker.com/_/eclipse-mosquitto) in docker container.
>Version: 2.0.9

[![](https://mermaid.ink/img/eyJjb2RlIjoiZ3JhcGggTFJcbiAgICBcbiAgICAlJSB0aGlzIGlzIGEgY29tbWVudCBBIC0tIHRleHQgLS0-IEJ7bm9kZX1cblxuICAgIHdlYXRoZXJQdWJbXCJXZWF0aGVyXCJdOjo6cHVibGlzaGVyIC0uLT4gTVFUVCgoXCJNUVRUIFNlcnZlciA8YnIvPiAmaGVhcnRzO1wiKSlcbiAgICBzb2xhclB1YltQaG90b3ZvbHRhaWtdOjo6cHVibGlzaGVyIC0uLT4gTVFUVFxuICAgIHdhbGxib3hQdWJbV2FsbGJveF06OjpwdWJsaXNoZXIgLS4tPiBNUVRUIFxuICAgIGJhdHRlcnlQdWJbXCJCYXR0ZXJ5IFN0b3JhZ2VcIl06OjpwdWJsaXNoZXIgLS4tPiBNUVRUIFxuICAgIE1RVFQgLS0-IHdhbGxib3hTdWJbXCJXYWxsYm94XCJdIFxuICAgIFxuIFxuICAgICUlIFN0eWxlcyBcbiAgICBjbGFzc0RlZiBwdWJsaXNoZXIgZmlsbDojMzQ5OERCLHN0cm9rZTojMzMzLHN0cm9rZS13aWR0aDoxcHg7XG5cbiAgICBzdHlsZSBNUVRUIGZpbGw6IzMzMyxzdHJva2U6IzMzMyxzdHJva2Utd2lkdGg6MnB4LGNvbG9yOiNmZmYsc3Ryb2tlLWRhc2hhcnJheTogNSA1ICAgIFxuXG4gICAgc3R5bGUgd2FsbGJveFN1YiBmaWxsOiNGMzlDMTIsY29sb3I6IzMzM1xuICAgICIsIm1lcm1haWQiOnsidGhlbWUiOiJkYXJrIn0sInVwZGF0ZUVkaXRvciI6ZmFsc2UsImF1dG9TeW5jIjp0cnVlLCJ1cGRhdGVEaWFncmFtIjpmYWxzZX0)](https://mermaid.live/edit#eyJjb2RlIjoiZ3JhcGggTFJcbiAgICBcbiAgICAlJSB0aGlzIGlzIGEgY29tbWVudCBBIC0tIHRleHQgLS0-IEJ7bm9kZX1cblxuICAgIHdlYXRoZXJQdWJbXCJXZWF0aGVyXCJdOjo6cHVibGlzaGVyIC0uLT4gTVFUVCgoXCJNUVRUIFNlcnZlciA8YnIvPiAmaGVhcnRzO1wiKSlcbiAgICBzb2xhclB1YltQaG90b3ZvbHRhaWtdOjo6cHVibGlzaGVyIC0uLT4gTVFUVFxuICAgIHdhbGxib3hQdWJbV2FsbGJveF06OjpwdWJsaXNoZXIgLS4tPiBNUVRUIFxuICAgIGJhdHRlcnlQdWJbXCJCYXR0ZXJ5IFN0b3JhZ2VcIl06OjpwdWJsaXNoZXIgLS4tPiBNUVRUIFxuICAgIE1RVFQgLS0-IHdhbGxib3hTdWJbXCJXYWxsYm94XCJdIFxuICAgIFxuIFxuICAgICUlIFN0eWxlcyBcbiAgICBjbGFzc0RlZiBwdWJsaXNoZXIgZmlsbDojMzQ5OERCLHN0cm9rZTojMzMzLHN0cm9rZS13aWR0aDoxcHg7XG5cbiAgICBzdHlsZSBNUVRUIGZpbGw6IzMzMyxzdHJva2U6IzMzMyxzdHJva2Utd2lkdGg6MnB4LGNvbG9yOiNmZmYsc3Ryb2tlLWRhc2hhcnJheTogNSA1ICAgIFxuXG4gICAgc3R5bGUgd2FsbGJveFN1YiBmaWxsOiNGMzlDMTIsY29sb3I6IzMzM1xuICAgICIsIm1lcm1haWQiOiJ7XG4gIFwidGhlbWVcIjogXCJkYXJrXCJcbn0iLCJ1cGRhdGVFZGl0b3IiOmZhbHNlLCJhdXRvU3luYyI6dHJ1ZSwidXBkYXRlRGlhZ3JhbSI6ZmFsc2V9)

## SetUp

First run docker `docker-compose up -d`

### Set user and password

Set Username & Password for Connections to Mosquitto (Anonymous is disabled). Create empty file _mosquitto.passwd_ in mqtt/config/

```sh
docker-compose exec mosquitto sh -c "mosquitto_passwd /mosquitto/config/mosquitto.passwd [YOUR_USER]"
```

Restart docker Containers:

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
