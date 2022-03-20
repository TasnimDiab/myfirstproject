<?php

session_start();

$message="";
if(count($_POST)>0) {
    include "students.php";
    $result = mysqli_query($conn,"SELECT * FROM `students` WHERE `email`='" . $_POST["email"] . "' AND `password` = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"] = $row['password'];
    } else {
        $message = "Invalid Username or Password!";
    }
}
if(isset($_SESSION["email"])) {
    header("Location:index.php");
}
?>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="container">
<form name="frmUser" method="post" action="">
    <p>Welcome Back</p>
    <p>og in to your account using email and password</p>
    <label for="email" >Email:</label><br>
    <input type="email" id="email" placeholder="Enter email" name="email"><br>
    <label for="password" >Password:</label><br>
    <input type="password"  id="pwd" placeholder="Enter password" name="Pass"><br>

    <button type="submit" class="btn btn-primary">Submit</button><br>

    <a>Forgot Password?</a>

</form>
</div>
<form  name="frmImage" action="uploadImage.php">
        <button type="submit" class="btn btn-primary">upload Image</button>

</form>

</body>
</html>