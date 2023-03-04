<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$mark = $_POST['mark'];
$level = $_POST['level'];
$number = $_POST['number'];
$date = $_POST['date'];
$type = $_POST['type'];



$INS = "INSERT INTO `bonus`( `e_id`, `c_id`, `mark`, `level`, `number`, `date`, `type`)
 VALUES ('$e_id','$c_id','$mark','$level','$number','$date','$type')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 0; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
