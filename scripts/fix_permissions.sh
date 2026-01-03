#!/bin/bash
#
# Grant proper permissions to MQTT Server files
# This script fixes permission issues for mosquitto log and password files
#

MQTT_DIR="/home/piUser/develop/mqtt-Server"

echo "Setting permissions for MQTT Server files..."

# Grant read/write access to log file
echo "- Updating mosquitto.log permissions..."
sudo chmod 666 "$MQTT_DIR/log/mosquitto.log"

# Set restrictive permissions on password file (owner read/write/execute only)
echo "- Updating mosquitto.passwd permissions..."
sudo chmod 0700 "$MQTT_DIR/config/mosquitto.passwd"

# Optional: Set owner to root for password file (if required)
# echo "- Setting password file owner to root..."
# sudo chown root:root "$MQTT_DIR/config/mosquitto.passwd"

echo "✓ Permissions updated successfully"
