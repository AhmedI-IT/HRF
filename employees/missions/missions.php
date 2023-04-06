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
    <!-- <link rel="stylesheet" href="missions.css"> -->
    <link rel="stylesheet" href="../style.css">

    <title>البعثات</title>
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
        <h1>البعثات</h1>
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
                    <label for="ministerial_order">الامر الوزاري</label>
                </div>
                <div class="col-75">
                    <input type="text" id="ministerial_order" name="ministerial_order" placeholder=" الامر الوزاري .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="mnumber">العدد</label>
                </div>
                <div class="col-75">
                    <input type="text" id="mnumber" name="mnumber" placeholder="  العدد .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="university_matter">الامر الجامعي </label>
                </div>
                <div class="col-75">
                    <input type="text" id="university_matter" name="university_matter" placeholder="  الامر الجامعي .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="unumber">العدد</label>
                </div>
                <div class="col-75">
                    <input type="text" id="unumber" name="unumber" placeholder="  العدد .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="country">الدولة / ولاية</label>
                </div>
                <div class="col-75">
                    <input type="text" id="country" name="country" placeholder="  الدولة / ولاية .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="certificate_req">الشهادة المطلوبة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="certificate_req" name="certificate_req" placeholder="  الشهادة المطلوبة .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="general_req">التخصص المطلوب العام</label>
                </div>
                <div class="col-75">
                    <input type="text" id="general_req" name="general_req" placeholder="  التخصص المطلوب العام .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="spec">التخصص الدقيق</label>
                </div>
                <div class="col-75">
                    <input type="text" id="spec" name="spec" placeholder="  التخصص الدقيق .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="vacation_period">فترة الاجازه</label>
                </div>
                <div class="col-75">
                    <input type="text" id="vacation_period" name="vacation_period" placeholder="  فترة الاجازة .." required autocomplete="off">
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
                $ministerial_order = $_POST['ministerial_order'];
                $mnumber = $_POST['mnumber'];
                $university_matter = $_POST['university_matter'];
                $unumber = $_POST['unumber'];
                $country = $_POST['country'];
                $certificate_req = $_POST['certificate_req'];
                $general_req = $_POST['general_req'];
                $spec = $_POST['spec'];
                $vacation_period = $_POST['vacation_period'];

                $INS = "INSERT INTO `missions`(`e_id`, `c_id`,`ministerial_order`, `mnumber`, `university_matter`, `unumber`, `country`, `certificate_req`, `general_req`, `spec`, `vacation_period`) 
                VALUES ('$e_id','$c_id','$ministerial_order','$mnumber','$university_matter','$unumber','$country','$certificate_req','$general_req','$spec','$vacation_period')";
                // echo $INS;
                $res = mysqli_query($link, $INS);
                if ($res) {
                    // header("Refresh: 1; URL =../info_emp/info_emp.php?ID=$e_id");
                    echo '<div id="message">تم اضافة البيانات بنجاح</div>';
                    include_once 'missions.php';
                } elseif (!$res) {
                    // die("Error in Query");
                    echo '<div id="message">Error: ' . $INS . '<br>' . $link->error . '</div>';
                    include_once 'missions.php';
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