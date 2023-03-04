<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$kind_hol = $_POST['kind_hol'];
$reason_hol = $_POST['reason_hol'];
$number = $_POST['number'];
$dat = $_POST['dat'];

$INS = "INSERT INTO `vacations`(`e_id`, `c_id`,`kind_hol`, `reason_hol`, `number`, `dat`) 
VALUES ('$e_id ','$c_id','$kind_hol','$reason_hol','$number','$dat')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 1; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
