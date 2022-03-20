<?php
include "students.php";
?>
<html>
<head>
    <title>User Login</title>
</head>
<body>
<?php
if($_SESSION['email']) {
?>
    <h1>Welcome</h1><br>
    <?php
    echo $_SESSION['email'];
    ?> .
    <h1><a href="logout.php">Logout here</a> </h1>

<?php
}
else {
        echo "<h1>Please login first</h1>";
    }

?>

</body>
</html>

