<?php require_once '../inc/config.php';
if (is_login()) {
    redirect('profile');
}
require_once '../sections/header.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>ورود کاربران</title>
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
</head>

<body>

<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start My Account Area Wrapper ==-->
    <section class="account-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="section-title text-center">
                        <?php
                        if ($message) {
                            ?>
                            <div class="success-message"><?php echo $message ?></div>
                            <?php
                        }
                        if ($error) {
                            ?>
                            <div class="error-message" style="background: darkred"><?php echo $error ?></div>
                            <?php
                        }
                        ?>
                        <h2 class="title">ورود به حساب کاربری</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="login-form-content">
                        <form action="login.php" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="username">ایمیل <span class="required">*</span></label>
                                        <input id="username" name="email" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password">رمز عبور <span class="required">*</span></label>
                                        <input id="password" name="password" class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button class="btn-login" name="do-login"><span>ورود</span></button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group account-info-group mb--0">
                                        <div class="rememberme-account">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">یاداوری رمز عبور</label>
                                            </div>
                                        </div>
                                        <a href="<?php echo PATH; ?>/users/forgot.php">فراموشی رمز عبور</a>
                                    </div>

                                </div>
                                <div class="account-bottom">
                                    <span class="d-block cate pt-10">اکانت ندارید؟ <a href="registration.php"> ثبت نام</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End My Account Area Wrapper ==-->
</main>

    <!-- preloader start here -->
<!--    <div class="preloader">-->
<!--        <div class="preloader-inner">-->
<!--            <div class="preloader-icon">-->
<!--                <span></span>-->
<!--                <span></span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- preloader ending here -->

    <!-- ==========Header Section Starts Here========== -->
    <!-- ==========Header Section Ends Here========== -->

    <!-- Page Header Section Start Here -->
<!--    <section class="page-header padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Login for Event</h4>
                <ul class="lab-ul">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a class="active">login</a></li>
                </ul>
            </div>
        </div>
    </section>
-->    <!-- Page Header Section Ending Here -->

    <!-- Login Section Section Starts Here -->
<?php require_once '../sections/footer.php' ?>

</body>

</html>