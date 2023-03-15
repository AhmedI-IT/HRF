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
    <!-- <link rel="stylesheet" href="certificate.css"> -->
    <link rel="stylesheet" href="../sty.css">

    <title>الشهادات</title>
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

    <center>
        <h1>الشهادات</h1>
    </center>
    <?php
    $iid = $_GET['ID'];

    ?>
    <div class="container">
        <form action="certificate_in.php" method="post">
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
                    <label for="certific">الشهادة </label>
                </div>
                <div class="col-75">
                    <input type="text" id="certific" name="certific" placeholder="  الشهادة .." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="general_jur">التخصص العام</label>
                </div>
                <div class="col-75">
                    <input type="text" id="general_jur" name="general_jur" placeholder="  التخصص العام .." required autocomplete="off">
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
                    <label for="date_obtained">تاريخ الحصول عليها</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date_obtained" name="date_obtained" placeholder="" required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="date_univ">تاريخ الامر الجامعي</label>
                </div>
                <div class="col-75">
                    <input type="date" id="date_univ" name="date_univ" placeholder="" required autocomplete="off">
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
                    <label for="anran_thesis">عنوان الرسالة / الاطروحة</label>
                </div>
                <div class="col-75">
                    <input type="text" id="anran_thesis" name="anran_thesis" placeholder="   عنوان الرسالة / الاطروحة.." required autocomplete="off">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="univ">جامعة / كلية</label>
                </div>
                <div class="col-75">
                    <input type="text" id="univ" name="univ" placeholder="   جامعة / كلية.." required autocomplete="off">
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

            <div class="row">
                <div class="col-25">
                    <label for="certific_allowances">مخصصات الشهادة</label>
                </div>
                <div class="col-75">
                    <select id="certific_allowances" name="certific_allowances" required autocomplete="off">
                        <option value="100">دكتوراة</option>
                        <option value="75">ماجستير</option>
                        <option value="45">بكالوريوس</option>
                    </select>
                </div>
            </div>


            <table>
                <tr>
                    <td>
                        <div class="row">
                            <input type="submit" value="حفظ">
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

</body>

</html>