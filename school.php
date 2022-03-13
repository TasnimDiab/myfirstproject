<?php
$srevername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($srevername ,$username , $password , $dbname);
if($conn){
    echo "connected with server mohamad";
}
else{
    die("connection failed".mysqli_connect_error());
}
$sql = "INSERT INTO`student`(`ID`, `full_name`, `email`, `age`, `gender`) 
VALUES ('1', 'rama Homsy', 'ramaHomsy@gmail.com', '14', 'female')";
$sql = "INSERT INTO`student`(`ID`, `full_name`, `email`, `age`, `gender`) 
VALUES ('5', 'firas khlid', 'firaskhlid@gmail.com', '14', 'male')";
$sql = "INSERT INTO`student`(`ID`, `full_name`, `email`, `age`, `gender`) 
VALUES ('6', 'sara rayas', 'sararayas@gmail.com', '15', 'female')";
$sql = "INSERT INTO`student`(`ID`, `full_name`, `email`, `age`, `gender`) 
VALUES ('3', 'rama Homsy', 'ramaHomsy@gmail.com', '14', 'female')";
$sql = "INSERT INTO`student`(`ID`, `full_name`, `email`, `age`, `gender`) 
VALUES ('4', 'rama Homsy', 'ramakhir@gmail.com', '14', 'female')";
$id = 3;
$sql = "DELETE FROM`student` WHERE id=$id";
$sql = "UPDATE`student` SET `full_name`='rama khir' WHERE id=4";



if (mysqli_query($conn , $sql)){
    echo json_encode($sql);
}

