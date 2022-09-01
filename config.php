<?php

$host = "localhost";
$username = "root";
$password = "1234";
$database = "user_db";

$conn = mysqli_connect("$host","$username","$password","$database");

if(!$conn)
{
    header("Location: ");
    die();
}

?>