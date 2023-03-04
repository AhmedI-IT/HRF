<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 500px;
            height: 100px;
            font-size: 28px;
            font-weight: bold;
            color: white;
            /* background-color: red; */
            background: linear-gradient(to bottom, #444, #222);
            padding: 10px;
            margin: 5x;
            text-align: center;
            border-radius: 50%;
            box-shadow: inset 0 8px 60px rgba(0, 0, 0, 0.1),
                inset 0 8px 8px rgba(0, 0, 0, 0.1), inset 0 -4px 4px rgba(0, 0, 0, 0.1);
            position: absolute;
            left: 25%;
            top: 30%;

        }
    </style>
</head>

<body>
    <div>

        <p>تم تسجيل خروجك من النظام</p>
    </div>
</body>

</html>

<?php
header('Refresh: 1; URL =../index.html');

// header('Refresh: 2; URL = ../login/login.php');
// header("location:../login/login.php");
?>