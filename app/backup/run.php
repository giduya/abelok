<?php

$mysql_host = "localhost";
$mysql_database = "declarapat";
$mysql_user = "root";
$mysql_password = "123456789";

// DB_CONNECTION=mysql
// DB_HOST=127.0.0.1
// DB_PORT=3306
// DB_DATABASE=declarapat
// DB_USERNAME=root
// DB_PASSWORD=123456789

# MySQL with PDO_MYSQL  
$db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

$query = file_get_contents("catalogs_20191003_213138.sql");

$stmt = $db->prepare($query);

if ($stmt->execute())
  echo "Success";
else
  echo "Fail";