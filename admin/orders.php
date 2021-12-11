<?php require_once '../inc/config.php' ?>
<?php
if (!is_admin_login()) {
    redirect("login.php");
}

$orders = get_orders();
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
                <h1 class="h2">سفارشات</h1>

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


                <?php foreach ($orders as $order) {
                    $products = get_order_items($order['order_id']);
                    ?>
                    <div class="order-item">
                        <div class="order-id"><?php echo $order['order_id'] ?>
                            <br>
                            <?php if ($order['is_paid'] == 0) { ?>
                                <div class="not-paid">پرداخت نشده</div>
                                <span style="font-size: 13px"><?php echo $order['user_email'] ?></span>
                            <?php } else { ?>
                                <div class="paid">پرداخت شده</div>
                                <span style="font-size: 13px"><?php echo $order['user_email'] ?></span>
                            <?php } ?>
                        </div>
                        <table>
                            <tr>
                                <th>نام محصول</th>
                                <th>قیمت محصول</th>
                            </tr>
                            <?php foreach ($products as $product) { ?>
                                <tr>
                                    <td><?php echo $product['product_name'] ?></td>
                                    <td><?php echo $product['product_price'] ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <hr>
                <?php } ?>


            </section>

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