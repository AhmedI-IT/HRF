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
    <!-- <link rel="stylesheet" href="bonus.css"> -->
    <link rel="stylesheet" href="../style.css">
    <title>العلاوة</title>
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
        <h1>العلاوة/الترفيعات</h1>
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
                    <label for="mark">الدرجة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="mark" name="mark" placeholder="  الدرجة .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="level">المرحلة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="level" name="level" placeholder=" المرحلة.." required autocomplete="off">
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
                    <label for="date">التاريخ </label>
                </div>
                <div class="col-75">
                    <input type="date" id="date" name="date" placeholder="" required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="type">نوع الاضافة</label>
                </div>
                <div class="col-75">
                    <select id="type" name="type" required autocomplete="off">
                        <option value="">اختر نوع الاضافة</option>
                        <option value="علاوة">علاوة</option>
                        <option value="ترفيع">ترفيع</option>
                    </select>
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
                $mark = $_POST['mark'];
                $level = $_POST['level'];
                $number = $_POST['number'];
                $date = $_POST['date'];
                $type = $_POST['type'];



                $INS = "INSERT INTO `bonus`( `e_id`, `c_id`, `mark`, `level`, `number`, `date`, `type`)
                VALUES ('$e_id','$c_id','$mark','$level','$number','$date','$type')";
                // echo $INS;
                $res = mysqli_query($link, $INS);
                if ($res) {
                    // header("location: thank.php?ID=$e_id");
                    echo '<div id="message">تم اضافة البيانات بنجاح</div>';
                    include_once 'bonus.php';
                } elseif (!$res) {
                    // die("Error in Query");
                    echo '<div id="message">Error: ' . $INS . '<br>' . $link->error . '</div>';
                    include_once 'bonus.php';
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