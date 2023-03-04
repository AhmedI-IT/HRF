<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");


$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$certific = $_POST['certific'];
$general_jur = $_POST['general_jur'];
$spec = $_POST['spec'];
$date_obtained = $_POST['date_obtained'];
$date_univ = $_POST['date_univ'];
$number = $_POST['number'];
$title_messeg = $_POST['anran_thesis'];
$univ = $_POST['univ'];
$state = $_POST['state'];
$certific_allowances = $_POST['certific_allowances'];

$INS = "INSERT INTO `certificates`(`e_id`, `c_id`,`certific`, `general_jur`, `spec`, `date_obtained`, `date_university`, `number`, `title_mess`, `university`, `state`,`certific_allowances`)
 VALUES ('$e_id','$c_id','$certific','$general_jur','$spec','$date_obtained','$date_univ','$number','$title_messeg','$univ','$state','$certific_allowances')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 0; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
