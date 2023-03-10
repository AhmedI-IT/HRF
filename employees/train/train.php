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
    <!-- <link rel="stylesheet" href="train.css"> -->
    <link rel="stylesheet" href="../sty.css">
    <title>الدورات التدريبية</title>
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
        <h1>دورات تدريبية والورش /ندوة</h1>
    </center>
    <?php
    $iid = $_GET['ID'];

    ?>
    <div class="container">
        <form action="train_in.php" method="post">

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
                    <label for="course_title">عنوان الدورة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="course_title" name="course_title" placeholder=" عنوان الدورة..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="type">نوعها</label>
                </div>
                <div class="col-75">
                    <select id="type" name="type">
                        <option value="">أختر نوع الدورة التدريبية</option>
                        <option value="دورة">دورة</option>
                        <option value="ورشة">ورشة</option>
                        <option value="مؤتمر">مؤتمر</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="course_date">تاريخ الدورة</label>
                </div>
                <div class="col-75">
                    <input type="date" id="course_date" name="course_date" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="dat">تاريخ صدور الامر</label>
                </div>
                <div class="col-75">
                    <input type="date" id="dat" name="dat" placeholder="">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="number">العدد</label>
                </div>
                <div class="col-75">
                    <input type="text" id="number" name="number" placeholder="  العدد ..">
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