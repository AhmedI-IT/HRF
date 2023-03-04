<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$type_punishment = $_POST['type_punishment'];
$ad_number = $_POST['ad_number'];
$number = $_POST['number'];
$reason_punishment = $_POST['reason_punishment'];
$code_no = $_POST['code_no'];

$INS = "INSERT INTO `punishment`(`e_id`, `c_id`,`type_punishment`, `ad_number`, `number`, `reason_punishment`, `code_no`)
 VALUES ('$e_id','$c_id','$type_punishment','$ad_number','$number','$reason_punishment','$code_no')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 1; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
