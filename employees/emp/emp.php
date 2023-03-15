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

        <form action="empin.php" method="post">
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

</body>

</html>