<?php

$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
$id  = $_GET['id'];

$del = "DELETE FROM `users` WHERE  id = " . $id;

if (mysqli_query($link, $del)) {
    // echo "Good Deleted";
    header("location:display.php");
} else {
    echo "Faild Deleted";
}
