<?php
include "students.php";

$file_name = $_FILES['image']['name'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
$ext = array("jpeg", "GIF", "JPG");
move_uploaded_file($file_tmp, 'images'.$file_name);

?>