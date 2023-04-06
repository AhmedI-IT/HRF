<?php
session_start();

$_SESSION['c_id'];



?>
<?php
if (isset($_POST['submit'])) {
    $valueToSrearch = $_POST['ValueToSrearch'];
    $query = "SELECT employee.* FROM employee,college WHERE employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "' and employee.name like '%" . $valueToSrearch . "%'";
    $search_res = filterTable($query);
} else {
    $query = "SELECT employee.* FROM employee,college WHERE employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "'";
    $search_res = filterTable($query);
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
    <!-- <link rel="stylesheet" href="query.css"> -->
    <link rel="stylesheet" href="StyleQuery.css">
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
                <p><a href="../logout.php">تسجيل خروج</a></p>

            </div>
            <!-- Right-aligned links -->
            <div class="topnav-right">
                <h1>نظام القوى العاملة والرواتب</h1>
                <h1>Human Resource Information System</h1>
                <h1>ادارة الموظفين</h1>
            </div>
        </div>
        <br><br><br><br><br><br><br>
        <!-- <p>Full width:</p> -->
        <form class="example" method="POST">
            <input type="text" placeholder="Search.." name="ValueToSrearch">
            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
        </form>

        <div>
            <form action="../emp/emp.php">
                <input type="submit" value="أضافة موظف">
            </form>
        </div>

        <!-- ============================================ -->
        <table dir="rtl" class="tab" width=100% border=1px solid black>
            <caption>
                <h1>
                    معلومات الموظفين
                </h1>
            </caption>
            </tr class="tt">
            <!-- <th> Id </th>  -->
            <th> NO. </th>
            <th> الاسم واللقب </th>
            <th> تاريخ الولادة </th>
            <th>مكان السكن</th>
            <th>رقم الهاتف</th>
            <th>الحالة الاجتماعية</th>
            <th>عدد الاطفال</th>
            <th>رقم البطاقة الوطنية</th>
            <th>جهة الاصدار</th>
            <th>تاريخ الاصدار</th>
            <th>السكن الحالي</th>
            <th>رقم البطاقة التموينية</th>
            <th>جهة الاصدار</th>
            <th>تاريخ الاصدار</th>
            <th>الجنس</th>
            </tr>
            <br><br>

            <?php

            // $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
            // $query = "SELECT * FROM `employee` ";
            // $query = "SELECT employee.* FROM employee,college WHERE employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "'";

            // $res = mysqli_query($link, $query);


            $count = 0;
            while ($row = mysqli_fetch_array($search_res)) {
                $count = $count + 1;
                echo "<tr>";

                // echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $count . "</td>";
                echo "<td><a href='../info_emp/info_emp.php?ID=" . $row['id'] . "'>" . $row['name'] . "</a></td>";
                echo "<td>" . $row['Birthdate'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['phone_Number'] . "</td>";
                echo "<td>" . $row['Marital_Status'] . "</td>";
                echo "<td>" . $row['children_count'] . "</td>";
                echo "<td>" . $row['National_ID'] . "</td>";
                echo "<td>" . $row['Issuer_N'] . "</td>";
                echo "<td>" . $row['Release_DateN'] . "</td>";
                echo "<td>" . $row['current_housing'] . "</td>";
                echo "<td>" . $row['ration_card'] . "</td>";
                echo "<td>" . $row['Issuer_r'] . "</td>";
                echo "<td>" . $row['Release_DateR'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";

                echo "</tr>";
            }

            ?>

        </table>

    </div>

    <div class="back">
        <button class="ca"><a href="../main/main.php">رجوع</a></button>
    </div>

</body>

</html>