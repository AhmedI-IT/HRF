<?php
session_start();

$_SESSION['c_id'];



?>
<?php
if (isset($_POST['submit'])) {
    $valueToSrearch = $_POST['ValueToSrearch'];
    // $query = "SELECT employee.* FROM employee,college WHERE employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "' and employee.name like '%" . $valueToSrearch . "%'";
    $query = "SELECT employee.*, bonus.*,scientific_title.*, direct.*, certificates.* FROM employee,college,bonus, scientific_title, direct, certificates WHERE employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "' and employee.id = bonus.e_id and employee.id =scientific_title.e_id and employee.id = direct.e_id and employee.id = certificates.e_id and employee.name like '%" . $valueToSrearch . "%'";
    $search_res = filterTable($query);
} else {
    // $query = "SELECT employee.*, bonus.*,scientific_title.*, direct.*, certificates.* FROM employee,college,bonus, scientific_title, direct, certificates WHERE employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "' and employee.id = bonus.e_id and employee.id =scientific_title.e_id and employee.id = direct.e_id and employee.id = certificates.e_id ";
    $query = "select employee.*,bonus.*,scientific_title.*, direct.*, certificates.* from employee,college, scientific_title, direct, certificates,bonus, (select e_id,max(date) as transaction_date from bonus group by e_id) max_user where employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "' and employee.id = bonus.e_id and employee.id =scientific_title.e_id and employee.id = direct.e_id and employee.id = certificates.e_id and bonus.e_id=max_user.e_id and bonus.date=max_user.transaction_date";

    $search_res = filterTable($query);
    //         $query = "SELECT bonus.*, scientific_title.*, direct.*, certificates.*, employee.* FROM bonus, scientific_title, direct, certificates, employee WHERE  scientific_title.e_id = bonus.e_id and direct.e_id = bonus.e_id and certificates.e_id = bonus.e_id and employee.id = bonus.e_id  and bonus.e_id = $id  and bonus.date <= NOW() ORDER BY bonus.date DESC LIMIT 1";

    // SELECT employee_id, MAX(date_column) AS latest_date
    // FROM employee_table
    // GROUP BY employee_id;
}
function filterTable($query)
{
    $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
    $res = mysqli_query($link, $query);

    return $res;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="salary.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Query</title>
</head>

<body>
    <div>
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

        <!-- <p>Full width:</p> -->
        <form class="example" method="POST">
            <input type="text" placeholder="Search.." name="ValueToSrearch">
            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
        </form>

        <!-- ============================================ -->
        <table dir="rtl" class="tab" width=100% border=1px solid black>
            <caption>
                <h1>
                    رواتب الموظفين
                </h1>
            </caption>
            </tr class="tt">
            <!-- <th> Id </th>  -->
            <th> NO. </th>
            <th> الاسم واللقب </th>
            <th>الدرجة</th>
            <th>المرحلة</th>
            <th>السنة</th>
            <th>الشهر</th>
            <th>الراتب</th>
            <th>مخصصات اللقب العلمي</th>
            <th>مخصصات الخدمة الجامعية</th>
            <th>مخصصات الشهادة</th>
            <th>مخصصات زوجية</th>
            <th>مخصصات الاطفال</th>
            <th>نقل</th>
            <th>الراتب الاسمي</th>
            <th>التقاعد</th>
            <th>الضريبة</th>
            <th>الراتب النهائي</th>

            </tr>
            <br><br>

            <?php

            // $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
            // $query = "SELECT * FROM `employee` ";
            // $query = "SELECT employee.* FROM employee,college WHERE employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "'";

            // $res = mysqli_query($link, $query);

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


            $count = 0;
            while ($row = mysqli_fetch_array($search_res)) {
                $count = $count + 1;
                echo "<tr>";

                // echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $count . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['mark'] . "</td>";
                echo "<td>" . $row['level'] . "</td>";
                echo "<td>" .  $year . "</td>";
                echo "<td>" . $today . "</td>";
                // الراتب
                $degree = $row['mark'];
                $stage = $row['level'];
                $degreem = $degree - 1;
                $stagem = $stage - 1;
                echo "<td>" .  $sulam[$degreem][$stagem] . "</td>";
                // مخصصات اللقب العلمي
                $allowances = $row['allowances'];
                echo "<td>" . $allowances . "%</td>";
                // مخصصات الخدمة الحامعية
                $direct_allowances = $row['direct_allowances'];
                echo "<td>" . $direct_allowances . "%</td>";
                // مخصصات الشهادة
                $certific_allowances =  $row['certific_allowances'];
                echo "<td>" . $certific_allowances . "%</td>";
                // مخصصات الزوجية
                $wife_allowances = $row['wife_allowances'];
                echo "<td>" . $wife_allowances . "</td>";
                // مخصصات الاطفال
                $allowances_child = $row['allowances_child'];
                echo "<td>" . $allowances_child . "</td>";
                // النقل
                $trans = $row['trans'];
                echo "<td>" . $trans . "</td>";
                // الراتب الاسمي
                $salaryName = 100;
                echo "<td>" . $salaryName . "%</td>";
                // مجموع النسب
                $sal = ($salaryName + $direct_allowances + $allowances + $certific_allowances) / 100;
                // الراتب الصافي
                $salarry = ($sulam[$degreem][$stagem] * $sal) + $wife_allowances + $allowances_child;
                // التقاعد
                $retirement = 0.15 * $salarry;
                echo "<td>" . $retirement . "</td>";
                // الضريبة
                $tax = 0.015 * $salarry;
                echo "<td>" . $tax . "</td>";
                // الراتب النهائي
                $Final_salary = $salarry - ($retirement + $tax);
                echo "<td>" . $Final_salary . "</td>";




                echo "</tr>";
            }

            ?>

        </table>

    </div>

    <div class="back">
        <button class="ca"><a href="../reports/reports.php">رجوع</a></button>
    </div>

</body>

</html>