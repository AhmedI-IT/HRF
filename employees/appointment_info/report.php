<?php
session_start();

$_SESSION['c_id'];



?>
<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $query = "SELECT employee.*, hiring.* FROM employee,hiring WHERE employee.id = hiring.e_id and hiring.c_id = '" . $_SESSION['c_id'] . "' and employee.name like '%" . $name . "%'";
    $search_res = filterTable($query);
} else {
    $query = "SELECT employee.*, hiring.* FROM employee,hiring WHERE employee.id = hiring.e_id and hiring.c_id = '" . $_SESSION['c_id'] . "' ";
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
    <!-- <link rel="stylesheet" href="../style_rep.css"> -->
    <link rel="stylesheet" href="../rep_style.css">
    <title>تقارير معلومات التعيين</title>
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
    <br><br><br><br><br><br>

    <div class="searchs">
        <form action="" method="POST">

            <div class="row">
                <div class="col-25">
                    <label for="name">اسم الموظف</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="ادخل اسم الموظف للبحث..">
                </div>
            </div>

            <!-- =========================== -->


            <div class="row">
                <input type="submit" value="بحث" name="submit">
            </div>
        </form>
        <hr>

        <table class="tab" width=100% border=1px solid black>
            <caption>
                <h1>
                    معلومات التعيين
                </h1>
            </caption>
            </tr class="tt">
            <!-- <th> ID </th> -->
            <th>.NO</th>
            <th> الاسم </th>
            <th>تاريخ التعيين</th>
            <th>تاريخ المباشرة</th>
            <th>صفة التعيين</th>

            </tr>
            <br><br>



            <?php

            $count = 0;
            while ($row = mysqli_fetch_array($search_res)) {
                $count = $count + 1;
                echo "<tr>";
                echo "<td>" . $count . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['date_hir'] . "</td>";
                echo "<td>" . $row['date_comm'] . "</td>";
                echo "<td>" . $row['appoi_status'] . "</td>";

                echo "</tr>";
            }

            ?>

        </table>


        <!-- <button class="cn"><a href="logout.php">تسجيل خروج</a></button> -->
        <button class="cn"><a href="../reports/reports.php">رجوع</a></button>
    </div>

</body>

</html>