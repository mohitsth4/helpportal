<?php
/*
Db Connection area
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'myds');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$con){
    die("connenction to this database failed due to" . mysqli_connect_error());
}
// echo "Success conneting to the db";

?>