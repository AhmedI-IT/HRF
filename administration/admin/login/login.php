 <?php
    $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
    $msg = '';
    if (
        isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['pass'])
    ) {
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $sql = "SELECT * FROM login_admin WHERE username = '" . $username . "' and passowrd = '" . $password . "'";
        $res = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($res);


        if ($row['usertype'] == 'admin') {
            header("location:../main/main.html ");
        } elseif ($row['usertype'] == 'user') {
            header("location: ../main/main.html");
        } else {
            $msg = 'Wrong username or password';
        }
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
     <div class="main">
         <center>
             <h1>تسجيل الدخول</h1>
         </center>
         <center>
             <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
         </center>
         <div class="container">
             <form action="" method="POST">
                 <div class="row">
                     <div class="col-25">
                         <label for="username">اسم المستخدم</label>
                     </div>
                     <div class="col-75">
                         <input class="inp" type="text" id="username" name="username" placeholder="اسم المستخدم.." require>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-25">
                         <label for="pass">كلمة السر</label>
                     </div>
                     <div class="col-75">
                         <input class="inp" type="password" id="pass" name="pass" placeholder="كلمة السر.." require>
                     </div>
                 </div>

                 <div class="row">
                     <input class="sub" type="submit" name="submit" value="تسجيل الدخول">
                 </div>
             </form>
         </div>
         <br>
         <!-- <a href="../main/main.html">الواجهة التالية</a> -->
         <!-- <img src="../img/pic2.png" alt=""> -->
     </div>
 </body>

 </html>