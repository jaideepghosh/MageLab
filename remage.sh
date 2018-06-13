#!/bin/bash
echo "Permission Update Started."
chown -R www-data:www-data .
chmod -R 755 .
chmod -R 777 var/
chmod -R 777 media/
chmod -R 777 app/etc
echo "Permission Update Completed."

echo "Clearing Cache.";
rm -r var/cache/*
echo "Cache Cleared.";
chown root:root remage.sh && chmod 777 remage.sh
