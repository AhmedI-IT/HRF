<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../maincss.css"> -->
    <!-- <link rel="stylesheet" href="../maincss1.css"> -->
    <title>Employee</title>
    <style>
        body {
            background-color: rgb(222, 220, 220);
        }

        * {
            box-sizing: border-box;
        }

        /* ============================================= */

        .topnav {
            position: relative;
            overflow: hidden;
            background-color: #333;
        }

        .topnav h1,
        h2,
        h3,
        img {
            /* float: left; */
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* .topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
} */

        .topnav-centered img {
            width: 100px;
            height: 100px;
            float: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .topnav-right {
            float: right;
        }

        .topnav-left {
            float: left;
        }

        /* Responsive navigation menu (for mobile devices) */
        @media screen and (max-width: 600px) {

            .topnav h1,
            h2,
            h3,
            .topnav-right {
                float: none;
                display: block;
            }

            .topnav-centered img {
                position: relative;
                top: 0;
                left: 0;
                transform: none;
            }
        }

        /* =========================================== */

        input[type=text],
        input[type=date],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }


        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            width: 150px;
            height: 40px;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        button {
            background-color: #04AA6D;
            color: white;
            width: 150px;
            height: 40px;
            padding: 12px 20px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        a {
            color: white;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        button:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: right;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: right;
            width: 50%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <center>
        <h1>استمارة معلومات الموظفين الاساسية</h1>
    </center>

    <div class="container">


        <?php
        $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");

        $iid  = $_GET['id'];
        $sql =  "SELECT * FROM users WHERE id =" . $iid;
        $resl = mysqli_query($link, $sql);
        ?>


        <form action="upgood.php" method="GET">

            <?php while ($row = mysqli_fetch_array($resl)) : ?>
                <?php //echo $row['name']  
                ?>
                <div class="row">
                    <div class="col-25">
                        <!-- <label for="">ID</label> -->
                    </div>
                    <div class="col-75">
                        <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="">الاسم </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="name" value="<?php echo $row['name_Emp']  ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="">الكلية:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="collage" value="<?php echo $row['college']  ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="">الايميل:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="email" value="<?php echo $row['email']  ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="">اسم المستخدم:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="user" value="<?php echo $row['username']  ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="">كلمة السر:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="pass" value="<?php echo $row['password']  ?>">
                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="type_acc">نوع الحساب</label>
                    </div>
                    <div class="col-75">
                        <select id="type_acc" name="type_acc">
                            <option value="<?php echo $row['type_Acount']  ?>">اداري</option>
                            <option value="<?php echo 'تدريسي' ?>">تدريسي</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <input class="btn" type="submit" name="submit" value="تعديل">
                </div>

            <?php endwhile; ?>
        </form>
        <?php


        ?>
</body>

</html>