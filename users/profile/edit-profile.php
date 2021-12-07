<?php require_once '../../inc/config.php'; ?>
<?php
if (!is_login()) {
    redirect('../login.php');
}

$user_data = get_userdata();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>سلام، <?php echo $user_data['display_name'] ?></title>
    <!--    <link rel="stylesheet" href="../assets/css/styles.css">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/x-icon/01.png">

    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/icofont.min.css">
    <link rel="stylesheet" href="../../assets/css/lightcase.css">
    <link rel="stylesheet" href="../../assets/css/swiper.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

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
<body>



<body>
<link href="../dashboard.css" rel="stylesheet">
</head>


<header class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow" >
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">آدیداس اسپورت</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="?logout=1">خروج از حساب کاربری</a>
        </div>
    </div>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="../.." target="_blank">بازگشت به وب سایت</a>
        </div>
    </div>

</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <span data-feather="home"></span>
                            داشبورد
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="edit-profile.php">
                            <span data-feather="file" ></span>
                            ویرایش پروفایل
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <span data-feather="shopping-cart"></span>
                            سفارشات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../cart.php" target="_blank">
                            <span data-feather="users"></span>
                            سبد خرید
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
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
                <h1 class="h2">سلام، <?php echo $user_data['display_name'] ?></h1>

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

            <div id="main" class="profile">


                <div class="box" style="padding: 10px;box-sizing: border-box">
                    <div class="update-profile">
                        <form action="edit-profile.php" method="post" enctype="multipart/form-data">
                            <a style="color: black">نام :</a><input type="text" name="display-name" value="<?php echo $user_data['display_name'] ?>" placeholder="نام نمایشی شما ..."><br>
                            <a style="color: black">آدرس :</a><input type="text" name="user-address" value="<?php echo $user_data['user_address'] ?>" placeholder="آدرس پستی شما ..."><br>
                            <a style="color: black">شماره تماس :</a><input type="text" name="user-number" value="<?php echo $user_data['user_number'] ?>" placeholder="شماره تماس شما ..."><br>
                            <?php if ($user_data['user_image']) { ?>
                                <img src="../../assets/images/profile/<?php echo $user_data['user_image'] ?>" alt="<?php echo $user_data['display_name'] ?>" width="80"><br>
                            <?php } else { ?>
                                <img src="../../assets/images/profile/profile.jpg" alt="<?php echo $user_data['display_name'] ?>" width="80"><br>
                            <?php } ?>
                            <span style="color: black">تصویر حساب کاربری شما: </span><br>
                            <input type="file" name="new-user-image"><br>
                            <input type="hidden" value="<?php echo $user_data['user_image'] ?>" name="user-image">

                            <input type="hidden" name="user-email" value="<?php echo $user_data['email'] ?>">
                            <input type="submit" name="update-profile" value="بروزرسانی پروفایل">
                        </form>
                    </div>
                </div>

            </div>



            <div class="clear"></div>




            </div>


</body>
</html>