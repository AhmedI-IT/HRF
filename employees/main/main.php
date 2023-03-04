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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="main.css">

    <title>الصفحة الرئيسية</title>
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


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/in3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>معرفة الراتب</h5>
                    <p>من خلال ادخال معلومات الراتب يمكنك حساب راتب الموظف بنقرة زر</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/in1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ادارة التقارير</h5>
                    <p>انشاء سيرة ذاتية خاصة للموظف تحتوي على كل معلوماته ومسيرته التعليمية</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/in2.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>معلومات الموظفين الاساسية</h5>
                    <p>تستطيع ان ترى وتدير كل بيانات الموظفين الذين يعملون في الموسسة</p>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- <div class="part3">
        <h1 class="emp">
            قيود الموظفين
        </h1>
        <ul>
            <li>كتب شكر وتقدير و ايفاو ومعلومات التعييين</li>
            <li>العقوبات والدروات التدريبية والاجازات</li>
            <li>الشهادات والمباشرة والبعثات والعلاوة</li>
            <li>أضافة موظف واللجان واللقب العلمي</li>
        </ul>


        <form action="../query/query.php">
            <input class="in1" type="submit" value="">
        </form>
    </div> -->

    <!-- <hr class="hr1"> -->

    <!-- 
    <div class="part2">
        <h1>
            <center>تقارير</center>

        </h1>
        <ul>
            <li>في هذا الجزء يمكنك معرفة التقاير الخاصة بالموظفين</li>
            <li>يمكنك استعراض التقارير في اي مدة تريدها ولاي سنة تريدها </li>
            <li>يمكنك اختيار الكورس والسنة الدراسية والبحث عن التقارير</li>
            <li>كم ما يهم موظفيك تجده هنا في هذا الجزء</li>
        </ul>

        <form action="../reports/reports.php">
            <input class="in2" type="submit" value="">
        </form>
    </div>


    <hr class="hr2"> -->

    <!-- ===================================================== -->
    <section class="about">
        <div class="main">
            <form action="../query/query.php">
                <!-- <input class="in1" type="submit" value=""> -->
                <input class="in1" type="image" src="Images/add2.png" name="submit" alt="submit" />

            </form>
            <!-- <img src="A.png" alt=""> -->
            <div class="About-text">
                <h2>قيود الموظفين</h2>
                <h5>اضغط على <span>الصوره </span></h5>
                <p>تعتبر قيود الموظفين من البنود المهمة والتي تؤثر على المؤسسة
                    وخاصة في الراتب ويجب معالجة هذه القيود بشكل منتظم ودقيق
                    حيث كل موظف يمتلك معلومات اساسية ومعلومات تعيين وشهادة
                    ودورات تدريبية ومباشرة وايفاد والعلاوة والعقوبات
                    واللجان والقسم العلمي واللقب العلمي والبعثات والاجازات
                    وكتب الشكر والتقدير كل هذن المعلومات يمكن اضافتهاوادارتها من هنا..</p>
            </div>
        </div>
    </section>

    <p></p>
    <section class="about">
        <div class="main">
            <form action="../reports/reports.php">
                <!-- <input class="in2" type="submit" value=""> -->
                <input class="in2" type="image" src="Images/pngwing.com (15).png" name="submit" alt="submit" />
            </form>
            <!-- <img src="A.png" alt=""> -->
            <div class="About-text">
                <h2>التقارير</h2>
                <h5>اضغط على <span>الصوره </span></h5>
                <p>
                    تقارير عن الموظفين هو نموذج ينم فيه عرض كل المعلومات المتعلقة بالموظف
                    وتتم كتابتها بواسطة الموظف المخصص بغرض عرض البيانات والملاحظات
                    بطريقة واضحة ان هذه التقارير يتم عرضها بطريقة محددة يتم فيها
                    تقسيم المعلومات بطريقة مرتبة وسهلة وذلك لتسهيل قراءة
                    المعلومات والبيانات وربط البيانات والملاحظات ببعضها البعض
                    كتابة التقارير يتم بشكل دوري في المؤسسة لتقديم كلفة البيانات
                    والمعلومات التي تخص الموظفين.</p>
            </div>
        </div>
    </section>



    <script type="script.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>