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
    <!-- <link rel="stylesheet" href="appointment_info.css"> -->
    <link rel="stylesheet" href="../sty.css">

    <title>معلومات التعيين</title>
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
        <h1>معلومات التعيين او الانتساب</h1>
    </center>
    <?php
    $iid = $_GET['ID'];

    ?>
    <div class="container">
        <form action="appointment_info_in.php" method="post">
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
                    <label for="date_hir">تاريخ التعيين</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date_hir" name="date_hir" placeholder="">
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

            <div class="row">
                <div class="col-25">
                    <label for="issu_entity">الجهة المصدرة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="issu_entity" name="issu_entity" placeholder="  الجهة المصدرة ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="date_comm">تاريخ المباشرة</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date_comm" name="date_comm" placeholder="">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="dnumber">عدده</label>
                </div>
                <div class="col-75">
                    <input type="text" id="dnumber" name="dnumber" placeholder="  عدده ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="appoi_status">صفة التعيين</label>
                </div>
                <div class="col-75">
                    <select id="appoi_status" name="appoi_status">
                        <option value="">أختر صفة التعيين</option>
                        <option value="تعيين">تعيين</option>
                        <option value="نقل">نقل</option>
                        <option value="تنسيب">تنسيب</option>
                        <option value="عقد">عقد</option>
                        <option value="أجر يومي">أجر يومي</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="degree">الدرجة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="degree" name="degree" placeholder="  الدرجة ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="stage">المرحلة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="stage" name="stage" placeholder=" المرحلة..">
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