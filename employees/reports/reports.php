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
    <link rel="stylesheet" href="reports.css">
    <title>Reports</title>
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


    <div class="main">
        <div class="content">
            <h1> التقارير <br><span>الخاصة بموظفي</span> <br>مؤسستنا</h1>
            <p class="par">مرحباً بكم في نظام ادارة القوى العاملة والرواتب
                <br>
                يعتبر هذا النظام من الانظمة التي تساعد الجامعة والكليات <br>
                على ادارة قواها العاملة وادارة بيانات موظفيها

            </p>
            <button class="cn"><a href="../main/main.php">الصفحة الرئيسية</a></button>
            <!-- <button class="cn"><a href="">رجوع</a></button> -->
            <table class="butns">
                <tr>
                    <td><button class="cn"><a href="../thank/report_thank.php">الشكر والتقدير</a></button></td>
                    <td><button class="cn"><a href="../dispatch/report.php">الايفاد</a></button></td>
                </tr>
                <tr>
                    <td><button class="cn"><a href="../missions/report.php">البعثات</a></button></td>
                    <td><button class="cn"><a href="../Punishment/report.php">العقوبات</a></button></td>
                </tr>
                <tr>
                    <td><button class="cn"><a href="../train/report.php">الدورات التدريبية</a></button></td>
                    <td><button class="cn"><a href="../certificatess/report.php">الشهادات</a></button></td>
                </tr>
                <tr>
                    <td><button class="cn"><a href="../committee/report.php">اللجان</a></button></td>
                    <td><button class="cn"><a href="../vacation/report.php">الاجازات</a></button></td>
                </tr>
                <tr>
                    <td><button class="cn"><a href="../appointment_info/report.php">معلومات التعيين</a></button></td>
                    <td><button class="cn"><a href="../direct/report.php">المباشرة</a></button></td>
                </tr>

                </tr>
                <td><button class="cn"><a href="../scientific_title/report.php">اللقب العلمي</a></button></td>
                <td><button class="cn"><a href="../bonus/report.php">العلاوة</a></button></td>
                <tr>
                </tr>
                <td><button class="cn"><a href="salary.php">الرواتب</a></button></td>
                <td><button class="cn"><a href="#">...</a></button></td>
                <tr>

            </table>

        </div>
    </div>

</body>

</html>