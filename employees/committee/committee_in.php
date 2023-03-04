<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");


$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$name_comm = $_POST['name_comm'];
$dat = $_POST['dat'];
$number = $_POST['number'];

$INS = "INSERT INTO `committess`(`e_id`, `c_id`,`name_comm`, `dat`, `number`)
 VALUES ('$e_id','$c_id','$name_comm','$dat','$number')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 1; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
