<?php
DEFINE ('DB_USER', 'nick');
DEFINE ('DB_PASSWORD', 'password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'forum2');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die("Could not connect to MySQL:" . mysqli_connect_error());

//Set endcoding
mysqli_set_charset($dbc, "utf8");
?>