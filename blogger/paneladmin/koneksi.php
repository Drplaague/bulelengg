<?php 

$host = "localhost";
$port = "5432";
$dbname = "webgis";
$user = "postgres";
$password = "admin";
$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
$dbconn = pg_connect($connection_string)
?>