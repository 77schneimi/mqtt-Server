# Troubleshooting

- [Troubleshooting](#troubleshooting)
  - [Permission](#permission)
    - [Logs](#logs)
    - [Password File](#password-file)
  - [Address](#address)
  - [Docker Shutdown](#docker-shutdown)

## Permission

[Troubleshooting](#troubleshooting) > [This section](#permission)

To fix these errors you can use the script `fix_permissions.sh` in the scripts directory.

### Logs

[Troubleshooting](#troubleshooting) > [Permission](#permission) > [This section](#logs)

> [!WARNING]
> File /mosquitto/config/mosquitto.passwd has world readable permissions. Future versions
> will refuse to load this file.
> To fix this, use `chmod 0700 /mosquitto/config/mosquitto.passwd`.

Solution: As described grant access!

### Password File

[Troubleshooting](#troubleshooting) > [Permission](#permission) > [This section](#password-file)

> [!WARNING]
> File /mosquitto/config/mosquitto.passwd owner is not root. Future versions will refuse to
> load this file. To fix this, use `chown root /mosquitto/config/mosquitto.passwd`.

Solution: Go to the File Directory where the mosquitto.passwd File is located. And run CMD

```sh
sudo chown root mosquitto.passwd
```

## Address

[Troubleshooting](#troubleshooting) > [This section](#address)

```sh
1732031628: Error: Address in use
```

## Docker Shutdown

[Troubleshooting](#troubleshooting) > [This section](#docker-shutdown)

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
