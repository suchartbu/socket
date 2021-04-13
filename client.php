<?php 
$host    = "10.1.41.10";
$port    = 58005;
$message = "Hello Server " . $host;
echo "Message To server :".$message;
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
// connect to server
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n"); 
// Send string to server
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
// Get server response
$result = socket_read ($socket, 1024) or die("Could not read server response\n");
echo "Reply From Server :".$result;
// Close socket
socket_close($socket);

?>