<?php
$DB_host = "us-cdbr-iron-east-05.cleardb.net";
$DB_user = "b61024b9978bf4";
$DB_pass = "1da2513a";
$DB_name = "heroku_495aaa2cb1fa4bb";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>
