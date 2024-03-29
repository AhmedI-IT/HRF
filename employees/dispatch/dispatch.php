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
    <!-- <link rel="stylesheet" href="dispatch.css"> -->
    <link rel="stylesheet" href="../style.css">

    <title>Document</title>
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
        <h1>الايفاد</h1>
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

            <div class="row">
                <div class="col-25">
                    <label for="date_comm">تاريخ المباشرة</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date_comm" name="date_comm" placeholder="" required autocomplete="off">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="provider_it">الجهة الموفر اليها</label>
                </div>
                <div class="col-75">
                    <input type="text" id="provider_it" name="provider_it" placeholder="  الجهة الموفر اليها .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="purpose_dispatch">الغرض من الايفاد</label>
                </div>
                <div class="col-75">
                    <input type="text" id="purpose_dispatch" name="purpose_dispatch" placeholder="  الغرض من الايفاد .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="dispatch_period">فترة الايفاد</label>
                </div>
                <div class="col-75">
                    <input type="text" id="dispatch_period" name="dispatch_period" placeholder="  فترة الايفاد .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="state">الدولة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="state" name="state" placeholder="  الدولة .." required autocomplete="off">
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
                $dat = $_POST['dat'];
                $number = $_POST['number'];
                $date_comm = $_POST['date_comm'];
                $provider_it = $_POST['provider_it'];
                $purpose_dispatch = $_POST['purpose_dispatch'];
                $dispatch_period = $_POST['dispatch_period'];
                $state = $_POST['state'];

                $INS = "INSERT INTO `dispatch`(`e_id`, `c_id`,`dat`, `number`, `date_comm`, `provider_it`, `purpose_dispatch`, `dispatch_period`, `state`)
                VALUES ('$e_id','$c_id','$dat','$number','$date_comm','$provider_it','$purpose_dispatch','$dispatch_period','$state')";
                // echo $INS;
                $res = mysqli_query($link, $INS);
                if ($res) {
                    // header("Refresh: 0; URL =../info_emp/info_emp.php?ID=$e_id");
                    echo '<div id="message">تم اضافة البيانات بنجاح</div>';
                    include_once 'dispatch.php';
                } elseif (!$res) {
                    // die("Error in Query");
                    echo '<div id="message">Error: ' . $INS . '<br>' . $link->error . '</div>';
                    include_once 'dispatch.php';
                }
            }
            ?>
            <script type="text/javascript">
                // Show the message for 3 seconds and then hide it
                setTimeout(function() {
                    document.getElementById('message').style.display = 'none';
                }, 3000);
            </script>

</body>

</html>