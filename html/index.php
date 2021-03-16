<?php

$user = 'mqttUser';
$pw = 'Nautilus!2';


$client = new Mosquitto\Client();
$client->setCredentials('mqttUser', 'Nautilus!2');
$client->onConnect('connect');
$client->onDisconnect('disconnect');
$client->onSubscribe('subscribe');
$client->onMessage('message');
$client->connect("mqtt", 1883, 5);
//$client->onLog('logger');
$client->subscribe('shellies/#', 0);
for ($i = 0; $i < 10; $i++) {
    $client->loop();
}
$client->unsubscribe('#');
for ($i = 0; $i < 10; $i++) {
    $client->loop();
}
function connect($r, $message)
{
    echo "I got code {$r} and message {$message}<br>";
}
function subscribe()
{
    echo "Subscribed to a topic<br>";
}
function unsubscribe()
{
    echo "Unsubscribed from a topic<br>";
}
function message($message)
{
    printf("Got a message on topic %s with payload:\n%s<br>", $message->topic, $message->payload);
}
function disconnect()
{
    echo "Disconnected cleanly<br>";
}
function logger()
{
    var_dump(func_get_args());
}


echo('</br>ENDE');