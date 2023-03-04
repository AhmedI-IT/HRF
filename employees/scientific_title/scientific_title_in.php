<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$new_title = $_POST['new_title'];
$dat_code = $_POST['dat_code'];
$number = $_POST['number'];
$allowances = $_POST['allowances'];

$INS = "INSERT INTO `scientific_title`(`e_id`, `c_id`,`new_title`, `dat_code`, `number`,`allowances`)
 VALUES ('$e_id','$c_id','$new_title','$dat_code','$number','$allowances')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 0; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
