<?php

session_start();
header('location: login.php');

$conn = mysqli_connect('localhost','test','1234','userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$query = "SELECT * FROM `usertable` WHERE `name` = '$name'";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);


if ($num == 1) {
    echo "Username Already Taken";
}else{
    $reg= "INSERT INTO `usertable`(`name`, `password`) VALUES ('$name', '$pass')";
    mysqli_query($conn, $reg);
    echo "Registration Successful";
}

?>
