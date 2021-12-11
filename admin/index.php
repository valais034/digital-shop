<?php require_once '../inc/config.php' ?>
<?php
if(!is_admin_login()){
    redirect("login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>محیط کاربری ادمین</title>
    <!--    <link rel="stylesheet" href="../assets/css/styles.css">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/x-icon/01.png">

    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/icofont.min.css">
    <link rel="stylesheet" href="../assets/css/lightcase.css">
    <link rel="stylesheet" href="../assets/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../users/dashboard.css" rel="stylesheet">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>پنل مدیریت</title>-->
<!--    <link rel="stylesheet" href="styles/styles.css">-->
<!--    <link href="styles/dashboard.css" rel="stylesheet">-->
<!--    <link href="../../users/dashboard.css" rel="stylesheet">-->
<!---->
<!--</head>-->
<body>
<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->

<header class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow" >
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"  style="background: gold;color: black" href="<?php echo PATH; ?>/admin">پنل مدیریت</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <div id="sidebarMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>
            </ul>
        </div>    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="?admin-logout=1">خروج </a>
        </div>
    </div>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="<?php echo PATH; ?>" target="_blank">مشاهده وب سایت</a>
        </div>
    </div>

</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <span data-feather="home"></span>
                            داشبورد
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">
                            <span data-feather="file"></span>
                            محصولات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-product.php">
                            <span data-feather="shopping-cart"></span>
                            افزودن محصول
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">
                            <span data-feather="users"></span>
لیست کاربران                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cats.php">
                            <span data-feather="bar-chart-2"></span>
                            دسته بندی ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.php">
                            <span data-feather="layers"></span>
                            نظرات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <span data-feather="layers"></span>
                            سفارشات
                        </a>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>نوشته ها</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="posts.php">
                            <span data-feather="file-text"></span>
                            نوشته ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-post.php">
                            <span data-feather="file-text"></span>
                            افزودن نوشته
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post-cats.php">
                            <span data-feather="file-text"></span>
                            دسته بندی نوشته ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">پنل ادمین</h1>

                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>


            <section class="event-gift-section padding-tb padding-b bg-image">
                <div class="container">
                    <div class="row flex-lg-row-reverse">
                        <div class="col-lg-6 col-12">
                            <div class="image-part">
                                <div class="row">
                                    <div class="col-xs-12">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="section-header" >
                                <h2>به پنل مدیریت خوش آمدید.</h2>
                                <p>لطفا از موارد سمت چپ یکی را انتخاب نمایید.</p>
                            </div>
                            <div class="section-wrapper">
                                <div class="gift-content">
                                    <p></p>
                                    <p>مزایای پنل مدیریت آدیداس اسپورت:</p>
                                    <ul class="gift-list">
                                        <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> مشاهده محصولات به صورت لیستی به همراه جزئیات کامل</li>
                                        <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> مشاهده لیست کاربران عضو شده در سایت</li>
                                        <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span> مشاهده دسته بندی ها و امکان افزودن دسته بندی جدید</li>
                                        <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span>مشاهده نظرات ثبت شده در صفحه محصولات و ویرایش، تایید و حذف آن ها</li>
                                        <li class="gift-item"><span><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </span>مشاهده سفارشات ثبت شده و جزئیات آن ها</li>

                                    </ul>
                                    <div class="register-button">
                                        <a href="products.php" class="lab-btn"><span>مشاهده محصولات</span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>





            <!--            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

            <!--            <h2>Section title</h2>-->
            <!--            <div class="table-responsive">-->
            <!--                <table class="table table-striped table-sm">-->
            <!--                    <thead>-->
            <!--                    <tr>-->
            <!--                        <th scope="col">#</th>-->
            <!--                        <th scope="col">Header</th>-->
            <!--                        <th scope="col">Header</th>-->
            <!--                        <th scope="col">Header</th>-->
            <!--                        <th scope="col">Header</th>-->
            <!--                    </tr>-->
            <!--                    </thead>-->
            <!--                    <tbody>-->
            <!--                    <tr>-->
            <!--                        <td>1,001</td>-->
            <!--                        <td>random</td>-->
            <!--                        <td>data</td>-->
            <!--                        <td>placeholder</td>-->
            <!--                        <td>text</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,002</td>-->
            <!--                        <td>placeholder</td>-->
            <!--                        <td>irrelevant</td>-->
            <!--                        <td>visual</td>-->
            <!--                        <td>layout</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,003</td>-->
            <!--                        <td>data</td>-->
            <!--                        <td>rich</td>-->
            <!--                        <td>dashboard</td>-->
            <!--                        <td>tabular</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,003</td>-->
            <!--                        <td>information</td>-->
            <!--                        <td>placeholder</td>-->
            <!--                        <td>illustrative</td>-->
            <!--                        <td>data</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,004</td>-->
            <!--                        <td>text</td>-->
            <!--                        <td>random</td>-->
            <!--                        <td>layout</td>-->
            <!--                        <td>dashboard</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,005</td>-->
            <!--                        <td>dashboard</td>-->
            <!--                        <td>irrelevant</td>-->
            <!--                        <td>text</td>-->
            <!--                        <td>placeholder</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,006</td>-->
            <!--                        <td>dashboard</td>-->
            <!--                        <td>illustrative</td>-->
            <!--                        <td>rich</td>-->
            <!--                        <td>data</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,007</td>-->
            <!--                        <td>placeholder</td>-->
            <!--                        <td>tabular</td>-->
            <!--                        <td>information</td>-->
            <!--                        <td>irrelevant</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,008</td>-->
            <!--                        <td>random</td>-->
            <!--                        <td>data</td>-->
            <!--                        <td>placeholder</td>-->
            <!--                        <td>text</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,009</td>-->
            <!--                        <td>placeholder</td>-->
            <!--                        <td>irrelevant</td>-->
            <!--                        <td>visual</td>-->
            <!--                        <td>layout</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,010</td>-->
            <!--                        <td>data</td>-->
            <!--                        <td>rich</td>-->
            <!--                        <td>dashboard</td>-->
            <!--                        <td>tabular</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,011</td>-->
            <!--                        <td>information</td>-->
            <!--                        <td>placeholder</td>-->
            <!--                        <td>illustrative</td>-->
            <!--                        <td>data</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,012</td>-->
            <!--                        <td>text</td>-->
            <!--                        <td>placeholder</td>-->
            <!--                        <td>layout</td>-->
            <!--                        <td>dashboard</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,013</td>-->
            <!--                        <td>dashboard</td>-->
            <!--                        <td>irrelevant</td>-->
            <!--                        <td>text</td>-->
            <!--                        <td>visual</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,014</td>-->
            <!--                        <td>dashboard</td>-->
            <!--                        <td>illustrative</td>-->
            <!--                        <td>rich</td>-->
            <!--                        <td>data</td>-->
            <!--                    </tr>-->
            <!--                    <tr>-->
            <!--                        <td>1,015</td>-->
            <!--                        <td>random</td>-->
            <!--                        <td>tabular</td>-->
            <!--                        <td>information</td>-->
            <!--                        <td>text</td>-->
            <!--                    </tr>-->
            <!--                    </tbody>-->
            <!--                </table>-->
            <!--            </div>-->
        </main>
    </div>
</div>




<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/fontawesome.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/swiper.min.js"></script>
<script src="../assets/js/circularProgressBar.min.js"></script>
<script src="../assets/js/isotope.pkgd.min.js"></script>
<script src="../assets/js/lightcase.js"></script>
<script src="../assets/js/functions.js"></script>
</body>
</html>