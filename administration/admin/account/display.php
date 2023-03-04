<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: right;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #4CAF50;
        color: white;
        text-align: center;
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

    button:hover {
        background-color: #45a049;
    }
</style>

<body>
    <center>
        <h1>معلومات الموظفين الذين يستخدمون النظام</h1>
    </center>
    <?php
    $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
    $query = "SELECT * FROM `users`";
    $res = mysqli_query($link, $query);




    ?>

    <table width=50% border=1px solid black>
        </tr>
        <th>No</th>
        <th>الاسم</th>
        <th>الكلية</th>
        <th>الايميل</th>
        <th>اسم المستخدم</th>
        <th>كلمة المرور</th>
        <th>نوع الحساب</th>
        <th colspan="2">الأحداث</th>
        </tr>
        <br><br>
        <?php
        while ($row = mysqli_fetch_array($res)) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name_Emp']; ?></td>
                <td><?php echo $row['college']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['type_Acount']; ?></td>
                <?php
                echo "<td><a href='upd.php?id=" . $row['id'] . "'><img src='pic6.png' alt='' style=''>  </a></td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "'> <img src='pic5.png' alt='' style=''> </a></td>";
                ?>
            </tr>

        <?php endwhile; ?>
    </table>

    <button>
        <a href=" ../main/main.html">رجوع</a>
    </button>

</body>

</html>