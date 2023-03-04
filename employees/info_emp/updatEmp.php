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
    <!-- <link rel="stylesheet" href="updatEmp.css"> -->
    <link rel="stylesheet" href="../sty.css">
    <title>تحديث معلومات الموظف</title>
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

    <?php
    $id = $_GET['ID'];
    // echo $id;
    $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
    $query = "SELECT * FROM `employee` where id =" . $id;
    // $query = "SELECT employee.* FROM employee,college WHERE employee.c_id = college.c_id and college.c_id = '" . $_SESSION['c_id'] . "'";

    $res = mysqli_query($link, $query);
    ?>


    <form action="updatEmp2.php" method="post">
        <?php
        while ($row = mysqli_fetch_array($res)) {
        ?>
            <div class="row">
                <div class="col-25">
                    <!-- <label for="des_code">رمز الكلية</label> -->
                </div>
                <div class="col-75">
                    <input type="hidden" id="des_code" name="c_id" value="<?php echo $_SESSION['c_id']; ?>">
                </div>
            </div>
            <!-- hidden -->
            <div class="row">
                <div class="col-25">
                    <!-- <label for="e_id">رمز الموظف</label> -->
                </div>
                <div class="col-75">
                    <input type="hidden" id="e_id" name="e_id" value="<?php echo $id; ?>" placeholder="">
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="">الاسم واللقب </label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="ادخل اسم الموظف واللقب العلمي" value="<?php echo $row['name']; ?>" name="a1">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">تاريخ الولادة:</label>
                </div>
                <div class="col-75">
                    <input type="date" value="<?php echo $row['Birthdate']; ?>" name="a2">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">مكان الولادة:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="ادخل مكان ولادة الموظف" value="<?php echo $row['address']; ?>" name="a3">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">رقم الهاتف:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="رقم هاتف الموظف" value="<?php echo $row['phone_Number']; ?>" name="a4">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">الحالة الزوجية:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="حالته الزوجية" value="<?php echo $row['Marital_Status']; ?>" name="a5">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">عدد الاطفال:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="عدد الاطفال" value="<?php echo $row['children_count']; ?>" name="a6">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">رقم البطاقة الوطنية:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="رقم البطاقة الوطنية" value="<?php echo $row['National_ID']; ?>" name="a7">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">جهة الاصدار:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="جهة اصدار الهوية" value="<?php echo $row['Issuer_N']; ?>" name="a8">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">تاريخ الاصدار:</label>
                </div>
                <div class="col-75">
                    <input type="date" value="<?php echo $row['Release_DateN']; ?>" name="a9">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">السكن الحالي:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="سكن الموظف الحالي" value="<?php echo $row['current_housing']; ?>" name="a10">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">رقم بطاقة التموينية:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="رقم البطاقة التموينية" value="<?php echo $row['ration_card']; ?>" name="a11">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">جهة الاصدار:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="جهة اصدار البطاقة التموينية" value="<?php echo $row['Issuer_r']; ?>" name="a12">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">تاريخ اصدارها:</label>
                </div>
                <div class="col-75">
                    <input type="date" value="<?php echo $row['Release_DateR']; ?>" name="a13">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="">الجنس:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="الجنس" value="<?php echo $row['Gender']; ?>" name="a14">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="wife_allowances">مخصصات زوجية:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="مخصصات زوجية" value="<?php echo $row['wife_allowances']; ?>" name="wife_allowances">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="allowances_child">مخصصات اطفال:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="مخصصات اطفال" value="<?php echo $row['allowances_child']; ?>" name="allowances_child">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="trans">نقل:</label>
                </div>
                <div class="col-75">
                    <input type="text" placeholder="نقل" value="<?php echo $row['trans']; ?>" name="trans">
                </div>
            </div>


            <table>
                <tr>
                    <td>
                        <div class="row">
                            <input class="btn" type="submit" name="submit" value="تحديث">
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <button>

                                <?php echo "<a href='../info_emp/info_emp.php?ID=" . $id . "'>رجوع</a>"; ?>

                            </button>
                        </div>

                    </td>
                </tr>

            </table>
        <?php
        }
        ?>
</body>

</html>