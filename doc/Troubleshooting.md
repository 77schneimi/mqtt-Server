# Troubleshooting

## Logs

### Permission

```sh
1732031352: Warning: File /mosquitto/config/mosquitto.passwd has world readable permissions. Future versions will refuse to load this file.
To fix this, use `chmod 0700 /mosquitto/config/mosquitto.passwd`.
```

Solution: As descriped grant acces !

#### Password File

Warning: File /mosquitto/config/mosquitto.passwd owner is not root. Future versions will refuse to load this file.To fix this, use `chown root /mosquitto/config/mosquitto.passwd`.Warning: File /mosquitto/config/mosquitto.passwd group is not root. Future versions will refuse to load this file.

Solution: Fo to the File Directory where the mosquitto.passwd FIle is located. And run CMD

```
sudo chown root mosquitto.passwd
```

### Address

```sh
1732031628: Error: Address in use
```
 
### Docker Shutdown

If you try to shutdown the docker the error occurs:

```sh
piUser@raspberrypi:~/develop/mqtt-Server $ docker compose down
[+] Running 1/0
 ! Network mosquitto-gateway  Resource is still in use  
```

All CMD like docker prune or network rm wont't work. This is why the Compose File was changed. To solve this Issue execute CMD:

```sh
docker compose down --remove-orphans
```

