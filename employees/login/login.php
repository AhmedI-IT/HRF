<?php
ob_start();
session_start();

$link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
$msg = '';
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pass'])) {

    $email = $_POST['email'];
    $password = $_POST['pass'];

    // $sql = "SELECT * FROM users ";
    // $sql = "SELECT * FROM users WHERE email = '" . $email . "' and password = '" . $password . "'";
    $sql = "SELECT * FROM users,college WHERE users.college = college.name  and users.email = '" . $email . "' and users.password = '" . $password . "'";
    $res = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($res);
    if ($row) {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['name'] = $row['name_Emp'];
        $_SESSION['college'] = $row['college'];
        $_SESSION['c_id'] = $row['c_id'];


        header('location:../main/main.php');
        // exit;
    } else {
        $msg = 'Wrong username or password';
    }
    // if ($email == $row['email']  &&  $password == $row['password']) {
    //     $_SESSION['valid'] = true;
    //     $_SESSION['timeout'] = time();
    //     $_SESSION['name'] = $row['name_Emp'];
    //     $_SESSION['college'] = $row['college'];
    //     header("location:../main/main.php");
    // } else {
    //     $msg = 'Wrong username or password';
    // }
}
?>



<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login1.css">
    <title>Login</title>

</head>

<body>

    <center>
        <h1>تسجيل الدخول</h1>
    </center>
    <center>
        <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
    </center>
    <div class="container">
        <form action="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
                                ?>" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="email">الايميل</label>
                </div>
                <div class="col-75">
                    <input class="inp" type="text" id="email" required name="email" placeholder="الايميل..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="pass">كلمة السر</label>
                </div>
                <div class="col-75">
                    <input class="inp" type="password" id="pass" required name="pass" placeholder="كلمة السر..">
                </div>
            </div>

            <div class="row">
                <?php //"<a href='../main/main.php'?i_d = '" . $iid . "'>" 
                ?><input class="sub" type="submit" name="submit" value="تسجيل الدخول"><?php //"</a>" 
                                                                                        ?>
            </div>
        </form>
    </div>

    <!-- <img src="../img/pic2.png" alt=""> -->


    <!-- <a href="../main/main.html">الواجهة الرئيسية</a> -->

    <!-- Welcome home Mr. <?php //echo $user_name 
                            ?> -->
</body>

</html>