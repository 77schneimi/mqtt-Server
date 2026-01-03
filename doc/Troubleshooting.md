# Troubleshooting

- [Troubleshooting](#troubleshooting)
  - [Logs](#logs)
    - [Permission](#permission)
    - [Password File](#password-file)
    - [Address](#address)
    - [Docker Shutdown](#docker-shutdown)

## Logs

[Troubleshooting](#troubleshooting) > [This section](#logs)

### Permission

[Troubleshooting](#troubleshooting) > [Logs](#logs) > [This section](#permission)

```sh
1732031352: Warning: File /mosquitto/config/mosquitto.passwd has world readable permissions. Future versions will refuse to load this file.
To fix this, use `chmod 0700 /mosquitto/config/mosquitto.passwd`.
```

Solution: As described grant access!

### Password File

[Troubleshooting](#troubleshooting) > [Logs](#logs) > [This section](#password-file)

Warning: File /mosquitto/config/mosquitto.passwd owner is not root. Future versions will refuse to load this file. To fix this, use `chown root /mosquitto/config/mosquitto.passwd`. Warning: File /mosquitto/config/mosquitto.passwd group is not root. Future versions will refuse to load this file.

Solution: Go to the File Directory where the mosquitto.passwd File is located. And run CMD

```sh
sudo chown root mosquitto.passwd
```

### Address

[Troubleshooting](#troubleshooting) > [Logs](#logs) > [This section](#address)

```sh
1732031628: Error: Address in use
```
 
### Docker Shutdown

[Troubleshooting](#troubleshooting) > [Logs](#logs) > [This section](#docker-shutdown)

If you try to shutdown the docker the error occurs:

```sh
piUser@raspberrypi:~/develop/mqtt-Server $ docker compose down
[+] Running 1/0
 ! Network mosquitto-gateway  Resource is still in use  
```

All CMD like docker prune or network rm won't work. This is why the Compose File was changed. To solve this Issue execute CMD:

```sh
docker compose down --remove-orphans
```
