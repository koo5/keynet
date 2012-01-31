<?php

/* Create a TCP/IP socket. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$result = socket_connect($socket, 'arduino.skynet.666.666.66', '666');
socket_write($socket, $_GET['key'], 1);


?>
