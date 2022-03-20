<?php

$srevername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($srevername, $username, $password, $dbname);
if ($conn) {
    echo "connected with server mohamad";
} else {
    die("connection failed" . mysqli_connect_error());
}
