<?php 
// DB credentials.
define('DB_HOST','sql209.epizy.com');
define('DB_USER','epiz_26380609');
define('DB_PASS','KsfmyTRI6LQFFS');
define('DB_NAME','epiz_26380609_bbdms');
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