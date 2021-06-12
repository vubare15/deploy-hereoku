<?php
// DB credentials.
define('DB_HOST','remotemysql.com');
define('DB_USER','gghmOkEekJ');
define('DB_PASS','MNFNIj8xtP');
define('DB_NAME','gghmOkEekJ');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
