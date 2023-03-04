<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild connect");

$name_college = $_POST['colleg_name'];
$dat = $_POST['course_date'];

// echo $name_college;
// echo "<br>";
// echo $dat;
$ins = "INSERT INTO `college`(`name`, `date`) VALUES ('$name_college','$dat')";
$res = mysqli_query($link, $ins);
// header("location: filter.php");
if ($res) {
    header("location: college.html");
} elseif (!$res) {
    die("Error in Query");
}
