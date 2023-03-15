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
    <link rel="stylesheet" href="info_emp1.css">
    <title>Information Employees</title>
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
    <br> <br>

    <div class="table1">
        <table class="tab" width="50%" border=1px solid black>
            <!-- <caption>معلومات الموظف الاساسية </caption> -->
            <tr>
                <td colspan='4' class="a"> معلومات الموظف الاساسية</td>
            </tr>
            <?php
            $id = $_GET['ID'];
            // echo $id;
            $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
            $query = "SELECT * FROM `employee` where id =" . $id;
            // $query = "SELECT employee.* FROM employee,college WHERE employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "'";

            $res = mysqli_query($link, $query);


            while ($row = mysqli_fetch_array($res)) {

                echo "<tr>";
                echo "<th colspan='4'><h1>" . $row['name'] . "</h1></th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='2'> تاريخ الولادة: " . $row['Birthdate'] . "</td>";
                echo "<td colspan='2'> مكان السكن: " . $row['address'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th colspan='4'>رقم الهاتف: " . $row['phone_Number'] . "</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='2'> الحالة الاجتماعية: " . $row['Marital_Status'] . "</td>";
                echo "<td colspan='2'> عدد الاطفال: " . $row['children_count'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th colspan='4'>الجنس: " . $row['Gender'] . "</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='2'> رقم البطاقة الوطنية: " . $row['National_ID'] . "</td>";
                echo "<td> جهة الاصدار: " . $row['Issuer_N'] . "</td>";
                echo "<td> تاريخ الاصدار: " . $row['Release_DateN'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th colspan='4'>السكن الحالي:  " . $row['current_housing'] . "</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='2'> رقم البطاقة التموينية: " . $row['ration_card'] . "</td>";
                echo "<td> جهة الاصدار: " . $row['Issuer_r'] . "</td>";
                echo "<td> تاريخ الاصدار: " . $row['Release_DateR'] . "</td>";
                echo "</tr>";
                // echo "<button><a href='../thank/thank.php?ID=" . $row[' id'] . "'>Update </a></button>";
            ?>
    </div>
    <div class="content">
        <div class="butns">
            <div>
                <button class="cn"><?php echo "<a href='../thank/thank.php?ID=" . $row['id'] . "'>شكر وتقدير</a>" ?></button>
                <button class="cn"><?php echo "<a href='../dispatch/dispatch.php?ID=" . $row['id'] . "'>الايفاد</a>" ?></button>
            </div>
            <div>
                <button class="cn"><?php echo "<a href='../missions/missions.php?ID=" . $row['id'] . "'>البعثات</a>" ?></button>
                <button class="cn"><?php echo "<a href='../Punishment/Punishment.php?ID=" . $row['id'] . "'>العقوبة</a>" ?></button>
            </div>
            <div>
                <button class="cn"><?php echo "<a href='../train/train.php?ID=" . $row['id'] . "'>دورات تدريبية</a>" ?></button>
                <button class="cn"><?php echo "<a href='../certificatess/certificate.php?ID=" . $row['id'] . "'>الشهادات</a>" ?></button>
            </div>
            <div>
                <button class="cn"><?php echo "<a href='../committee/committee.php?ID=" . $row['id'] . "'>اللجان</a>" ?></button>
                <button class="cn"><?php echo "<a href='../vacation/vacation.php?ID=" . $row['id'] . "'>الاجازات</a>" ?></button>
            </div>
            <div>
                <button class="cn"><?php echo "<a href='../appointment_info/appointment_info.php?ID=" . $row['id'] . "'>معلومات التعيين</a>" ?></button>
                <button class="cn"><?php echo "<a href='../direct/direct.php?ID=" . $row['id'] . "'>المباشرة</a>" ?></button>
            </div>
            <div>
                <button class="cn"><?php echo "<a href='../scientific_title/scientific_title.php?ID=" . $row['id'] . "'>اللقب العلمي</a>" ?></button>
                <button class="cn"><a href="#">قسم علمي</a></button>
            </div>
            <div>
                <button class="cn"><?php echo "<a href='../bonus/bonus.php?ID=" . $row['id'] . "'> العلاوة او الترفيع</a>" ?></button>
                <button class="cn"><?php echo "<a href='salary.php?ID=" . $row['id'] . "'>الراتب</a>" ?></button>
                <!-- <button class="cn"><a href="salary.php">الراتب</a></button> -->
            </div>
            <div>
                <button class="cn"><?php echo "<a href='updatEmp.php?ID=" . $row['id'] . "'>تحديث المعلومات</a>" ?></button>
                <button class="cn"><a href="#">السيرة الشخصية</a></button>
            </div>
        </div>

    </div>
<?php } ?>
</table>
<div class="back">
    <button class="ca"><a href="../query/query.php">رجوع</a></button>
</div>



</body>

</html>