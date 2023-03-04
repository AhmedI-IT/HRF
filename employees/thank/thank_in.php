<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$c_id = $_POST['c_id'];
$e_id = $_POST['e_id'];
$academic_year = $_POST['academic_year'];
$Semester = $_POST['Semester'];
$ad_number = $_POST['ad_number'];
$number = $_POST['number'];
$reason = $_POST['reason'];

$INS = "INSERT INTO `thanks`(`c_id`, `e_id`, `academic_year`, `Semester`, `ad_number`, `number`, `reason`) 
VALUES ('$c_id','$e_id','$academic_year','$Semester','$ad_number','$number','$reason')";
// echo $INS;
$res = mysqli_query($link, $INS);
if ($res) {

    // header("Refresh: 0; URL =../info_emp/info_emp.php?ID=$e_id");
    header("Refresh: 0; URL =thank.php?ID=$e_id");
    // header("location: thank.php?ID=$e_id");
    // header('Refresh: 2; URL =emp.php');
} elseif (!$res) {
    die("Error in Query");
}
