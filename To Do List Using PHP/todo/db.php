<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DBNAME = 'emp';
$dbcon = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);

if ($dbcon->connect_error) {
  die("connect error: " . $dbcon->connect_error);
}

?>