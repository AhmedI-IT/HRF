<?php
// if (isset($_GET['submit'])) {

$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
$id = $_GET['id'];
$name = $_GET['name'];
$collage = $_GET['collage'];
$email = $_GET['email'];
$user = $_GET['user'];
$pass = $_GET['pass'];
$type_acc = $_GET['type_acc'];



$Update = "UPDATE `users` SET `name_Emp`='$name',`college`='$collage',`email`='$email',`username`='$user',`password`='$pass',`type_Acount`='$type_acc' WHERE id = '$id'";
$res = mysqli_query($link, $Update);
if ($res) {
    header("location: display.php");
} elseif (!$res) {
    die("Error in Query");
}
// }
