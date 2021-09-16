<?php
const HOST = '185.98.131.109';
const USERNAME = 'zackp1314931';
const PASSWORD = 'uwyapiqj5g';
const DBNAME = 'zackp1314931';
$dbcon = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);

if ($dbcon->connect_error) {
  die("connect error: " . $dbcon->connect_error);
}

?>