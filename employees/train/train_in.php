<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$course_title = $_POST['course_title'];
$type = $_POST['type'];
$course_date = $_POST['course_date'];
$dat = $_POST['dat'];
$number = $_POST['number'];

$INS = "INSERT INTO `training`(`e_id`, `c_id`, `titlt`, `type`, `date_train`, `date_com`, `number`) VALUES ('$e_id','$c_id','$course_title','$type','$course_date','$dat','$number')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 1; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
