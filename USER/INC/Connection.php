<?php

//Connection Codential
$Database_Host = 'localhost';
$DataBase_User = 'root';
$Password = '';
$database_Name = "loginsys";

//Connection Code
$connection = mysqli_connect($Database_Host, $DataBase_User, $Password, $database_Name);

//Check Connection
if (!$connection) {
    die("Error:" . $connection);

} else {
    echo "Connected to Database Successfully!";
}














?>