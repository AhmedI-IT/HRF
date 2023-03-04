<?php
session_start();

$_SESSION['c_id'];



?>
<?php
if (isset($_POST['submit'])) {
    $academic_year = $_POST['academic_year'];
    $Semester = $_POST['Semester'];
    $query = "SELECT employee.*, thanks.* FROM employee,thanks WHERE employee.id = thanks.e_id and thanks.c_id = '" . $_SESSION['c_id'] . "' and thanks.academic_year like '%" . $academic_year . "%'and thanks.Semester like '%" . $Semester . "%'  ";
    $search_res = filterTable($query);
} else {
    $query = "SELECT employee.*, thanks.* FROM employee,thanks WHERE employee.id = thanks.e_id and thanks.c_id = '" . $_SESSION['c_id'] . "' ";
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
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="report_think.css"> -->
    <link rel="stylesheet" href="../style_rep.css">
    <title>Report Thanks and appreciation</title>
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

    <div class="searchs">
        <form action="" method="POST">

            <div class="row">
                <div class="col-25">
                    <label for="academic_year">السنة الدراسية</label>
                </div>
                <div class="col-75">
                    <select id="academic_year" name="academic_year">
                        <option value=''>اختر السنة الدراسية</option>
                        <?php

                        for ($i = 1950; $i <= 2050; $i++) {
                            $j = $i + 1;
                            echo "<option value='$i-$j'>$i-$j</option>";
                        }

                        ?>
                    </select>
                </div>
            </div>

            <!-- =========================== -->

            <div class="row">
                <div class="col-25">
                    <label for="Semester">الفصل الدراسي</label>
                </div>
                <div class="col-75">
                    <select id="Semester" name="Semester">
                        <option value="">اختر الفصل الدراسي</option>
                        <option value="الفصل الدراسي الاول">الفصل الدراسي الاول</option>
                        <option value="الفصل الدراسي الثاني">الفصل الدراسي الثاني</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <input type="submit" value="بحث" name="submit">
            </div>
        </form>
        <hr>

        <table class="tab" width=100% border=1px solid black>
            <caption>
                <h1>

                    كتب الشكر والتقدير
                </h1>
            </caption>
            </tr class="tt">
            <!-- <th> ID </th> -->
            <th>.NO</th>
            <th> الاسم </th>
            <th>السنة الدراسية</th>
            <th>الفصل الدراسي</th>
            <th>مكان السكن</th>
            <th>السكن الحالي</th>
            <th>السبب</th>
            </tr>
            <br><br>



            <?php

            $count = 0;
            while ($row = mysqli_fetch_array($search_res)) {
                $count = $count + 1;
                echo "<tr>";
                echo "<td>" . $count . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['academic_year'] . "</td>";
                echo "<td>" . $row['Semester'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['current_housing'] . "</td>";
                echo "<td>" . $row['reason'] . "</td>";
                echo "</tr>";
            }

            ?>

        </table>


        <!-- <button class="cn"><a href="logout.php">تسجيل خروج</a></button> -->
        <button class="cn"><a href="../reports/reports.php">رجوع</a></button>
    </div>

</body>

</html>