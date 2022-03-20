<?php
include "school.php";

$Name = $_POST['name'];
$Email = $_POST['email'];
$Password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM `students` where `name`='$Name'");
if (mysqli_affected_rows($sql)>0) {
    echo "This User Already Exists";
    exit;
}

else{

    $INSERT= "INSERT INTO `students`( `name`, `email`, `password`)VALUES ('$Name','$Email','$Password')";
    $sql=mysqli_query($conn,$INSERT)or die ("could not perform the Query");
    echo "Account Created ";
}?>