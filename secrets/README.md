# Secrets Directory

This directory contains sensitive configuration files for the MQTT server.

## Files

- `mqtt_credentials.yaml` - MQTT user credentials (not tracked in git)
- `mqtt_credentials.yaml.example` - Template for credentials file

## Security

**IMPORTANT:** Never commit actual credentials to version control!

1. The `.gitignore` file should exclude `mqtt_credentials.yaml`
2. Set restrictive permissions: `chmod 600 secrets/mqtt_credentials.yaml`
3. Use strong, unique passwords for each user

## Usage

```bash
# Copy the example file
cp mqtt_credentials.yaml.example mqtt_credentials.yaml

# Edit with your actual credentials
nano mqtt_credentials.yaml

# Generate password file (run after updating credentials)
docker compose exec mosquitto sh -c "mosquitto_passwd -c /mosquitto/config/mosquitto.passwd USERNAME"

# Restart container
docker compose restart
```
