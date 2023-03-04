<?php
$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

$ii = $_POST['e_id'];
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

$INS = " UPDATE `employee` SET `c_id`='$v',`name`='$v1',`Birthdate`='$v2',`address`='$v3',`phone_Number`='$v4',`Marital_Status`='$v5',`children_count`='$v6',`National_ID`='$v7',`Issuer_N`='$v8',`Release_DateN`='$v9',`current_housing`='$v10',`ration_card`='$v11',`Issuer_r`='$v12',`Release_DateR`='$v13',`Gender`='$v14',wife_allowances='$wife_allowances',allowances_child='$allowances_child',trans='$trans' WHERE id = '$ii'";
// echo $INS;
$res = mysqli_query($link, $INS);
// header("location: filter.php");
if ($res) {

    // header("location: info_emp.php?ID = $ii");
    header("Refresh: 0; URL =info_emp.php?ID=$ii");
} elseif (!$res) {
    die("Error in Query");
}
