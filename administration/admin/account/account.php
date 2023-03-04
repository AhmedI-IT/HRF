<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$name_emp = $_POST['name_emp'];
$colleg_name = $_POST['colleg_name'];
$email = $_POST['eemail'];
$username = $_POST['username'];
$password = $_POST['pass'];
$type_account = $_POST['type_acc'];

$ins = "INSERT INTO `users`(`name_Emp`, `college`, `email`, `username`, `password`, `type_Acount`) VALUES ('$name_emp','$colleg_name','$email','$username','$password','$type_account')";
$res = mysqli_query($link, $ins);
// header("location: filter.php");
if ($res) {
    header("location: display.php");
} elseif (!$res) {
    die("Error in Query");
}
