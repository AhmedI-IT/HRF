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
    <link rel="stylesheet" href="salary1.css">
    <title>الراتب</title>
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
            <p><a href="../logout.php">تسجيل خروج</a></p>

        </div>
        <!-- Right-aligned links -->
        <div class="topnav-right">
            <h1>نظام القوى العاملة والرواتب</h1>
            <h1>Human Resource Information System</h1>
            <h1>ادارة الموظفين</h1>
        </div>
    </div>
    <br> <br><br><br><br><br>

    <center>
        <h1>معلومات الراتب</h1>
    </center>

    <table class="tab" width=100% border=1px solid black>
        <!-- <caption>
            معلومات الراتب
        </caption> -->
        <!-- </tr class="tt">
        <th> الاسم </th>
        <th>الدرجة</th>
        <th>المرحلة</th>
        <th>السنة</th>
        <th>الشهر</th>
        <th>الراتب</th>
        <th>مخصصات لقب علمي</th>
        <th>مخصصات خدمة جامعية</th>
        <th>مخصصات شهادة</th>
        <th>زوجية</th>
        <th>اطفال</th>
        <th>نقل</th>
        <th>الراتب الاسمي</th>
        <th>الاستقطاعات</th>
        <th>التقاعد</th>
        <th>الضريبة</th>
        <th>مجموع النسب</th>
        <th>الراتب الصافي</th>
        <th>الراتب النهائي</th>

        </tr> -->





        <?php


        $id = $_GET['ID'];
        $today = date("m");
        $year = date("Y");

        $sulam = array(
            array(910000, 930000, 950000, 970000, 990000, 1010000, 1030000, 1050000, 1070000, 1090000, 1110000),
            array(793000, 740000, 757000, 774000, 791000, 808000, 825000, 842000, 859000, 876000, 893000),
            array(600000, 610000, 630000, 630000, 640000, 650000, 660000, 670000, 680000, 690000, 700000),
            array(509000, 517000, 525000, 533000, 542000, 549000, 557000, 565000, 573000, 581000, 589000),
            array(429000, 435000, 441000, 447000, 453000, 459000, 465000, 471000, 477000, 483000, 489000),
            array(362000, 368000, 374000, 380000, 386000, 392000, 398000, 404000, 410000, 416000, 422000),
            array(296000, 302000, 308000, 314000, 320000, 326000, 332000, 338000, 344000, 350000, 356000),
            array(260000, 263000, 266000, 269000, 272000, 275000, 278000, 281000, 284000, 287000, 290000),
            array(210000, 213000, 216000, 219000, 222000, 225000, 228000, 231000, 234000, 237000, 240000),
            array(170000, 172000, 176000, 179000, 182000, 185000, 188000, 191000, 194000, 197000, 200000)
        );



        //   echo $sulam[$degree][$stage]; // Outputs 6
        // echo $sulam[6][0]; // Outputs 6


        $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
        // $query = "SELECT * FROM `employee` ";
        // $query = "SELECT hiring.* FROM hiring WHERE   hiring.e_id = $id ";
        // $query = "SELECT hiring.*, scientific_title.*, direct.*, certificates.*, employee.* FROM hiring, scientific_title, direct, certificates, employee WHERE  scientific_title.e_id = hiring.e_id and direct.e_id = hiring.e_id and certificates.e_id = hiring.e_id and employee.id = hiring.e_id  and hiring.e_id = $id ";
        // $query = "SELECT bonus.*, scientific_title.*, direct.*, certificates.*, employee.* FROM bonus, scientific_title, direct, certificates, employee WHERE  scientific_title.e_id = bonus.e_id and direct.e_id = bonus.e_id and certificates.e_id = bonus.e_id and employee.id = bonus.e_id  and bonus.e_id = $id ";
        $query = "SELECT bonus.*, scientific_title.*, direct.*, certificates.*, employee.* FROM bonus, scientific_title, direct, certificates, employee WHERE  scientific_title.e_id = bonus.e_id and direct.e_id = bonus.e_id and certificates.e_id = bonus.e_id and employee.id = bonus.e_id  and bonus.e_id = $id  and bonus.date <= NOW() ORDER BY bonus.date DESC LIMIT 1";
        // $sql = "SELECT * FROM table_name WHERE date_field <= NOW() ORDER BY date_field DESC LIMIT 1";


        $res = mysqli_query($link, $query);


        while ($row = mysqli_fetch_array($res)) {
            // $degree = $row['degree'];
            $degree = $row['mark'];
            // $stage = $row['stage'];
            $stage = $row['level'];
            // لان المصفوفة تبدأ من 0
            $degreem = $degree - 1;
            $stagem = $stage - 1;

            // الراتب الاسمي
            $salaryName = 100;
            // مخصصات الخدمة الحامعية
            $direct_allowances = $row['direct_allowances'];
            // مخصصات اللقب العلمي
            $allowances = $row['allowances'];
            // مخصصات الشهادة
            $certific_allowances =  $row['certific_allowances'];
            // مخصصات الزوجية
            $wife_allowances = $row['wife_allowances'];
            // مخصصات الاطفال
            $allowances_child = $row['allowances_child'];
            // النقل
            $trans = $row['trans'];


            // مجموع النسب
            $sal = ($salaryName + $direct_allowances + $allowances + $certific_allowances) / 100;
            // echo $sal . "<br>";
            // الراتب الصافي
            $salarry = ($sulam[$degreem][$stagem] * $sal) + $wife_allowances + $allowances_child;
            // echo $salarry . "<br>";

            // التقاعد
            $retirement = 0.15 * $salarry;
            // الضريبة
            $tax = 0.015 * $salarry;
            // الراتب النهائي
            $Final_salary = $salarry - ($retirement + $tax);

            echo "<tr>";
            echo "<th colspan='4'><h1>" . $row['name'] . "</h1></th>";
            echo "</tr>";
            echo "<tr>";
            // echo "<td>الدرجة: <br>" . $row['degree'] . "</td>";
            echo "<td>الدرجة: <br>" . $row['mark'] . "</td>";
            // echo "<td>المرحلة: <br>" . $row['stage'] . "</td>";
            echo "<td>المرحلة: <br>" . $row['level'] . "</td>";
            echo "<td>السنة: <br>" .  $year . "</td>";
            echo "<td>الشهر: <br>" . $today . "</td>";
            echo "</tr>";
            echo "<td colspan='4'>الراتب: <br>" .  $sulam[$degreem][$stagem] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'>مخصصات لقب علمي:<br>" . $allowances . "</td>";
            echo "<td >مخصصات خدمة جامعية:<br>" . $direct_allowances . "</td>";
            echo "<td>مخصصات الشهادة:<br>" . $certific_allowances . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'>مخصصات زوجية<br>" . $wife_allowances . "</td>";
            echo "<td>أطفال:<br>" . $allowances_child . "</td>";
            echo "<td>نقل<br>" . $trans . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='4'> الراتب الاسمي:<br>" . $salaryName . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th colspan='4'><h1>" . "الاستقطاعات" . "</h1></th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='2'>التقاعد:<br>" . $retirement . "</td>";
            echo "<td colspan='2'>الضريبة:<br>" . $tax . "</td>";
            echo "</tr>";
            echo "<tr>";
            // echo "<td>" . $sal . "</td>";
            // echo "<td>" . $salarry . "</td>";
            echo "<th colspan='4'><h1>" . "الراتب النهائي" . "</h1></th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th colspan='4'><h1>" . $Final_salary . "</h1></th>";






            echo "</tr>";
        }

        ?>

    </table>



    <div class="row">
        <button>
            <?php
            echo "<a href='../info_emp/info_emp.php?ID= $id'>رجوع</a>";
            ?>
        </button>
    </div>


    <?php



    ?>
</body>

</html>


</body>

</html>