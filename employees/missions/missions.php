<?php
session_start();

$_SESSION['c_id'];



?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="missions.css"> -->
    <link rel="stylesheet" href="../sty.css">

    <title>البعثات</title>
</head>

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
        <h1>البعثات</h1>
    </center>
    <?php
    $iid = $_GET['ID'];

    ?>
    <div class="container">
        <form action="missions_in.php" method="post">
            <div class="row">
                <div class="col-25">
                    <!-- <label for="c_id">رمز الموظف</label> -->
                </div>
                <div class="col-75">
                    <input type="hidden" id="c_id" name="e_id" value="<?php echo $iid; ?>" placeholder="رمز الموظف ..">
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <!-- <label for="c_id">رمز الكلية</label> -->
                </div>
                <div class="col-75">
                    <input type="hidden" id="c_id" name="c_id" value="<?php echo $_SESSION['c_id']; ?>" placeholder="  رمز الكلية ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="ministerial_order">الامر الوزاري</label>
                </div>
                <div class="col-75">
                    <input type="text" id="ministerial_order" name="ministerial_order" placeholder=" الامر الوزاري ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="mnumber">العدد</label>
                </div>
                <div class="col-75">
                    <input type="text" id="mnumber" name="mnumber" placeholder="  العدد ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="university_matter">الامر الجامعي </label>
                </div>
                <div class="col-75">
                    <input type="text" id="university_matter" name="university_matter" placeholder="  الامر الجامعي ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="unumber">العدد</label>
                </div>
                <div class="col-75">
                    <input type="text" id="unumber" name="unumber" placeholder="  العدد ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="country">الدولة / ولاية</label>
                </div>
                <div class="col-75">
                    <input type="text" id="country" name="country" placeholder="  الدولة / ولاية ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="certificate_req">الشهادة المطلوبة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="certificate_req" name="certificate_req" placeholder="  الشهادة المطلوبة ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="general_req">التخصص المطلوب العام</label>
                </div>
                <div class="col-75">
                    <input type="text" id="general_req" name="general_req" placeholder="  التخصص المطلوب العام ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="spec">التخصص الدقيق</label>
                </div>
                <div class="col-75">
                    <input type="text" id="spec" name="spec" placeholder="  التخصص الدقيق ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="vacation_period">فترة الاجازه</label>
                </div>
                <div class="col-75">
                    <input type="text" id="vacation_period" name="vacation_period" placeholder="  فترة الاجازة ..">
                </div>
            </div>


            <table>
                <tr>
                    <td>
                        <div class="row">
                            <input type="submit" value="حفظ">
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <button>
                                <?php echo "<a href='../info_emp/info_emp.php?ID=" . $iid . "'>رجوع</a>"; ?>
                            </button>
                        </div>

                    </td>
                </tr>

            </table>

</body>

</html>