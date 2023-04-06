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
    <!-- <link rel="stylesheet" href="thank.css"> -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="a1.css">
    <title>Thanks and appreciation</title>
</head>
<style type="text/css">
    #message {
        display: block;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
    }
</style>

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
    <br><br><br><br><br><br><br><br>
    <center>
        <h1>شكر وتقدير</h1>
        <h2>
            <?php
            $id = $_GET['ID'];

            ?>
        </h2>
    </center>
    <div class="container">
        <form action="" method="post">
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
                    <!-- <label for="e_id">رمز الموظف</label> -->
                </div>
                <div class="col-75">
                    <input type="hidden" id="e_id" name="e_id" value="<?php echo $id; ?>" placeholder="">
                </div>
            </div>


            <!-- ==================================== -->

            <div class="row">
                <div class="col-25">
                    <label for="academic_year">السنة الدراسية</label>
                </div>
                <div class="col-75">
                    <select id="academic_year" name="academic_year" required autocomplete="off">
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
                    <select id="Semester" name="Semester" required autocomplete="off">
                        <option value="">اختر الفصل الدراسي</option>
                        <option value="الفصل الدراسي الاول">الفصل الدراسي الاول</option>
                        <option value="الفصل الدراسي الثاني">الفصل الدراسي الثاني</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="ad_number">رقم الامر الاداري</label>
                </div>
                <div class="col-75">
                    <input type="text" id="ad_number" name="ad_number" placeholder="  رقم الامر الاداري.." required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="number">العدد</label>
                </div>
                <div class="col-75">
                    <input type="text" id="number" name="number" placeholder="  العدد .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="reason"> السبب</label>
                </div>
                <div class="col-75">
                    <input type="text" id="reason" name="reason" placeholder=" السبب .." required autocomplete="off">
                </div>
            </div>
            <table>
                <tr>
                    <td>
                        <div class="row">
                            <input type="submit" value="حفظ" name="submit">
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <button>
                                <?php
                                echo "<a href='../info_emp/info_emp.php?ID= $id'>رجوع</a>";
                                ?>
                            </button>
                        </div>

                    </td>
                </tr>

            </table>

            <?php

            if (isset($_POST['submit'])) {
                $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

                $c_id = $_POST['c_id'];
                $e_id = $_POST['e_id'];
                $academic_year = $_POST['academic_year'];
                $Semester = $_POST['Semester'];
                $ad_number = $_POST['ad_number'];
                $number = $_POST['number'];
                $reason = $_POST['reason'];

                $INS = "INSERT INTO `thanks`(`c_id`, `e_id`, `academic_year`, `Semester`, `ad_number`, `number`, `reason`) 
                VALUES ('$c_id','$e_id','$academic_year','$Semester','$ad_number','$number','$reason')";
                // echo $INS;
                $res = mysqli_query($link, $INS);
                if ($res) {
                    // header("location: thank.php?ID=$e_id");
                    echo '<div id="message">تم اضافة البيانات بنجاح</div>';
                    include_once 'thank.php';
                } elseif (!$res) {
                    // die("Error in Query");
                    echo '<div id="message">Error: ' . $INS . '<br>' . $link->error . '</div>';
                    include_once 'thank.php';
                    // header("location: thank.php?ID=$e_id");
                }
            }
            ?>
            <script type="text/javascript">
                // Show the message for 3 seconds and then hide it
                setTimeout(function() {
                    document.getElementById('message').style.display = 'none';
                    // window.location.href = "thank.php?ID= $e_id";

                }, 3000);
            </script>

</body>

</html>