<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$date_hir = $_POST['date_hir'];
$number = $_POST['number'];
$issu_entity = $_POST['issu_entity'];
$date_comm = $_POST['date_comm'];
$dnumber = $_POST['dnumber'];
$appoi_status = $_POST['appoi_status'];
$degree = $_POST['degree'];
$stage = $_POST['stage'];

$INS = "INSERT INTO `hiring`( `e_id`, `c_id`,`date_hir`, `number`, `issu_entity`, `date_comm`, `dnumber`, `appoi_status`, `degree`, `stage`) 
VALUES ('$e_id','$c_id','$date_hir','$number','$issu_entity','$date_comm','$dnumber','$appoi_status','$degree','$stage')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 0; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
