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
        <h1>كليات جامعة ذي قار</h1>
    </center>
    <?php
    $link = mysqli_connect("localhost", "root", "", "hrf") or die("Faild");
    $query = "SELECT * FROM `college`";
    $res = mysqli_query($link, $query);




    ?>

    <table width=50% border=1px solid black>
        </tr>
        <th>No</th>
        <th>اسم الكلية</th>
        <th>تاريخ التأسيس</th>
        </tr>
        <br><br>
        <?php
        while ($row = mysqli_fetch_array($res)) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['date']; ?></td>
            </tr>

        <?php endwhile; ?>
    </table>

    <button>
        <a href="../main/main.html">رجوع</a>
    </button>

</body>

</html>