<?php

// server info
$server = ‘127.0.0.1’;
$user = ‘csci459’;
$pass = ‘testdb’;
$db = ‘testdb’;

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>
