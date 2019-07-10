<?php

session_start();

$conn = mysqli_connect('localhost','test','1234','userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$query = "SELECT * FROM `usertable` WHERE `name` = '$name' && `password` = '$pass'";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);


if ($num == 1) {
    $_SESSION['username'] = $name;
    header ('location: home.php');
}else{
    header ('location: login.php');
}

?>
