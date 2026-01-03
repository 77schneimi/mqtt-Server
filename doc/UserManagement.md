# User Management

- [User Management](#user-management)
  - [Generall](#generall)
  - [Add User](#add-user)
    - [Update](#update)

## Generall

[User Management](#user-management) > [This Section](#generall)

Manage the MQTT Users to be a little bit mor secure.

## Add User

[User Management](#user-management) > [This Section](#add-user)

Go to the MQTT config Folter weher the mosquitto.passwd File is located.
Add command

```sh
docker compose exec mosquitto sh -c "mosquitto_passwd /mosquitto/config/mosquitto.passwd [YOUR_USER]"
```

### Update

You can also add/update a username and password in a single line, but be aware that this means the password is visible on the command line and in any command history:

```sh
mosquitto_passwd <password file> <username> <password>
```
