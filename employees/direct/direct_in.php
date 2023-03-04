<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$number = $_POST['number'];
$date_comm = $_POST['date_comm'];
$commet = $_POST['commet'];
$direct_allowances = $_POST['direct_allowances'];


$INS = "INSERT INTO `direct`( `e_id`, `c_id`, `number`, `date_comm`, `commet`,`direct_allowances`)
 VALUES ('$e_id','$c_id','$number','$date_comm','$commet','$direct_allowances')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 0; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
