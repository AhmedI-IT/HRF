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
    <!-- <link rel="stylesheet" href="train.css"> -->
    <link rel="stylesheet" href="../sty.css">
    <title>الدورات التدريبية</title>
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
        </div>
        <!-- Right-aligned links -->
        <div class="topnav-right">
            <h1>نظام القوى العاملة والرواتب</h1>
            <h1>Human Resource Information System</h1>
            <h1>ادارة الموظفين</h1>
        </div>
    </div>

    <center>
        <h1>دورات تدريبية والورش /ندوة</h1>
    </center>
    <?php
    $iid = $_GET['ID'];

    ?>
    <div class="container">
        <form action="" method="post">

            <div class="row">
                <div class="col-25">
                    <!-- <label for="c_id">رمز الموظف</label> -->
                </div>
                <div class="col-75">
                    <input type="hidden" id="c_id" name="e_id" value="<?php echo $iid; ?>" placeholder="رمز الموظف ..">
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <!-- <label for="c_id">رمز الكلية</label> -->
                </div>
                <div class="col-75">
                    <input type="hidden" id="c_id" name="c_id" value="<?php echo $_SESSION['c_id']; ?>" placeholder="  رمز الكلية ..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="course_title">عنوان الدورة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="course_title" name="course_title" placeholder=" عنوان الدورة.." required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="type">نوعها</label>
                </div>
                <div class="col-75">
                    <select id="type" name="type" required autocomplete="off">
                        <option value="">أختر نوع الدورة التدريبية</option>
                        <option value="دورة">دورة</option>
                        <option value="ورشة">ورشة</option>
                        <option value="مؤتمر">مؤتمر</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="course_date">تاريخ الدورة</label>
                </div>
                <div class="col-75">
                    <input type="date" id="course_date" name="course_date" placeholder="" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="dat">تاريخ صدور الامر</label>
                </div>
                <div class="col-75">
                    <input type="date" id="dat" name="dat" placeholder="" required autocomplete="off">
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
                                <?php echo "<a href='../info_emp/info_emp.php?ID=" . $iid . "'>رجوع</a>"; ?>
                            </button>
                        </div>
                    </td>
                </tr>

            </table>
            <?php

            if (isset($_POST['submit'])) {
                $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

                $e_id = $_POST['e_id'];
                $c_id = $_POST['c_id'];
                $course_title = $_POST['course_title'];
                $type = $_POST['type'];
                $course_date = $_POST['course_date'];
                $dat = $_POST['dat'];
                $number = $_POST['number'];

                $INS = "INSERT INTO `training`(`e_id`, `c_id`, `titlt`, `type`, `date_train`, `date_com`, `number`) VALUES ('$e_id','$c_id','$course_title','$type','$course_date','$dat','$number')";
                // echo $INS;
                $res = mysqli_query($link, $INS);
                if ($res) {
                    // header("location: thank.php?ID=$e_id");
                    echo '<div id="message">تم اضافة البيانات بنجاح</div>';
                    include_once 'train.php';
                } elseif (!$res) {
                    // die("Error in Query");
                    echo '<div id="message">Error: ' . $INS . '<br>' . $link->error . '</div>';
                    include_once 'train.php';
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