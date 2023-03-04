<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
$v = $_POST['c_id'];
$v1 = $_POST['a1'];
$v2 = $_POST['a2'];
$v3 = $_POST['a3'];
$v4 = $_POST['a4'];
$v5 = $_POST['a5'];
$v6 = $_POST['a6'];
$v7 = $_POST['a7'];
$v8 = $_POST['a8'];
$v9 = $_POST['a9'];
$v10 = $_POST['a10'];
$v11 = $_POST['a11'];
$v12 = $_POST['a12'];
$v13 = $_POST['a13'];
$v14 = $_POST['a14'];
$wife_allowances = $_POST['wife_allowances'];
$allowances_child = $_POST['allowances_child'];
$trans = $_POST['trans'];

$INS = " INSERT INTO `employee`(`c_id`,`name`, `Birthdate`, `address`, `phone_Number`, `Marital_Status`, `children_count`, `National_ID`, `Issuer_N`, `Release_DateN`, `current_housing`, `ration_card`, `Issuer_r`, `Release_DateR`, `Gender`, `wife_allowances`, `allowances_child`, `trans`) 
       VALUES ('$v','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13','$v14','$wife_allowances','$allowances_child','$trans')";
// echo $INS;
$res = mysqli_query($link, $INS);
// header("location: filter.php");
if ($res) {

    // header("location: emp.html");
    header('Refresh: 0; URL =../query/query.php');
} elseif (!$res) {
    die("Error in Query");
}
