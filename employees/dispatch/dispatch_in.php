<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$dat = $_POST['dat'];
$number = $_POST['number'];
$date_comm = $_POST['date_comm'];
$provider_it = $_POST['provider_it'];
$purpose_dispatch = $_POST['purpose_dispatch'];
$dispatch_period = $_POST['dispatch_period'];
$state = $_POST['state'];

$INS = "INSERT INTO `dispatch`(`e_id`, `c_id`,`dat`, `number`, `date_comm`, `provider_it`, `purpose_dispatch`, `dispatch_period`, `state`)
 VALUES ('$e_id','$c_id','$dat','$number','$date_comm','$provider_it','$purpose_dispatch','$dispatch_period','$state')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 0; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
