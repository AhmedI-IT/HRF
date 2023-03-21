<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="emp.css"> -->
    <link rel="stylesheet" href="../sty.css">
    <title>Employee</title>
</head>
<style type="text/css">
    #message {
        display: block;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
    }
</style>

<body>

    <div class="topnav">
        <!-- Centered link -->
        <div class="topnav-centered">
            <img src="../img/icon.png" alt="">
        </div>
        <!-- Left-aligned links (default) -->
        <div class="topnav-left">
            <h2>جامعة ذي قار</h2>
            <!-- <h3>كلية علوم الحاسوب والرياضيات</h3> -->
            <h3><?php echo $_SESSION['college'] ?></h3>
            <!-- <h2>Employee name ....</h2> -->
            <h2><?php echo $_SESSION['name'];  ?></h2>
        </div>
        <!-- Right-aligned links -->
        <div class="topnav-right">
            <h1>نظام القوى العاملة والرواتب</h1>
            <h1>Human Resource Information System</h1>
            <h1>ادارة الموظفين</h1>
        </div>
    </div>
    <center>
        <h1>استمارة معلومات الموظفين الاساسية</h1>
    </center>

    <div class="container">

        <form action="" method="post">
            <div class="row">
                <div class="col-25">
                    <!-- <label for="des_code">رمز الكلية</label> -->
                </div>
                <div class="col-75">
                    <input type="hidden" id="des_code" name="c_id" value="<?php echo $_SESSION['c_id']; ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="">الاسم واللقب </label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="ادخل اسم الموظف واللقب العلمي" name="a1" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">تاريخ الولادة:</label>
                </div>
                <div class="col-75">
                    <input type="date" name="a2" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">مكان الولادة:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="ادخل مكان ولادة الموظف" name="a3" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">رقم الهاتف:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="رقم هاتف الموظف" name="a4" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">الحالة الزوجية:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="حالته الزوجية" name="a5" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">عدد الاطفال:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="عدد الاطفال" name="a6" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">رقم البطاقة الوطنية:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="رقم البطاقة الوطنية" name="a7" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">جهة الاصدار:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="جهة اصدار الهوية" name="a8" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">تاريخ الاصدار:</label>
                </div>
                <div class="col-75">
                    <input type="date" name="a9" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">السكن الحالي:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="سكن الموظف الحالي" name="a10" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">رقم بطاقة التموينية:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="رقم البطاقة التموينية" name="a11" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">جهة الاصدار:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="جهة اصدار البطاقة التموينية" name="a12" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">تاريخ اصدارها:</label>
                </div>
                <div class="col-75">
                    <input type="date" name="a13" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">الجنس:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="الجنس" name="a14" required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="wife_allowances">مخصصات زوجية:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="مخصصات زوجية" name="wife_allowances" required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="allowances_child">مخصصات اطفال:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="مخصصات اطفال" name="allowances_child" required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="trans">نقل:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="نقل" name="trans" required autocomplete="off">
                </div>
            </div>


            <table>
                <tr>
                    <td>
                        <div class="row">
                            <input class="btn" type="submit" name="submit" value="حفظ المعلومات">
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <button>
                                <a href="../query/query.php">رجوع</a>
                            </button>
                        </div>

                    </td>
                </tr>

            </table>

            <?php

            if (isset($_POST['submit'])) {
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
                    echo '<div id="message">تم اضافة البيانات بنجاح</div>';
                    include_once 'emp.php';
                    // header("location: ../query/query.php");
                    // header('Refresh: 0; URL =../query/query.php');
                } elseif (!$res) {
                    // die("Error in Query");
                    echo '<div id="message">Error: ' . $INS . '<br>' . $link->error . '</div>';
                    include_once 'emp.php';
                }
            }
            ?>

            <script type="text/javascript">
                // Show the message for 3 seconds and then hide it
                setTimeout(function() {
                    document.getElementById('message').style.display = 'none';
                }, 3000);
            </script>
</body>

</html>