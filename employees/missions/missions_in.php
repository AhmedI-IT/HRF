<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$e_id = $_POST['e_id'];
$c_id = $_POST['c_id'];
$ministerial_order = $_POST['ministerial_order'];
$mnumber = $_POST['mnumber'];
$university_matter = $_POST['university_matter'];
$unumber = $_POST['unumber'];
$country = $_POST['country'];
$certificate_req = $_POST['certificate_req'];
$general_req = $_POST['general_req'];
$spec = $_POST['spec'];
$vacation_period = $_POST['vacation_period'];

$INS = "INSERT INTO `missions`(`e_id`, `c_id`,`ministerial_order`, `mnumber`, `university_matter`, `unumber`, `country`, `certificate_req`, `general_req`, `spec`, `vacation_period`) 
VALUES ('$e_id','$c_id','$ministerial_order','$mnumber','$university_matter','$unumber','$country','$certificate_req','$general_req','$spec','$vacation_period')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {
    header("Refresh: 1; URL =../info_emp/info_emp.php?ID=$e_id");
} elseif (!$res) {
    die("Error in Query");
}
