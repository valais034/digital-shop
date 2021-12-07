<?php require_once '../inc/config.php';
//mysqli_query($db,"INSERT INTO `users`(`display_name`, `email`, `password`) VALUES ('reza','reza@gmail.com','123456')");
if (is_login()) {
  redirect('profile');
}
?>
<?php
require_once '../sections/header.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>آدیداس اسپورت</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
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

    <!-- ==========Header Section Starts Here========== -->
    <!-- ==========Header Section Ends Here========== -->

    <!-- Page Header Section Start Here -->
    <!-- Page Header Section Ending Here -->
<!--    <div class="forms-box">-->
<!--        --><?php
//        if ($message) {
//            ?>
<!--            <div class="success-message">--><?php //echo $message ?><!--</div>-->
<!--            --><?php
//        }
//        if ($error) {
//            ?>
<!--            <div class="error-message">--><?php //echo $error ?><!--</div>-->
<!--            --><?php
//        }
//        ?>
<!--    </div>-->
    <!-- Registration section start Here -->
    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start My Account Area Wrapper ==-->
        <section class="account-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">ثبت نام کابران</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="register-form-content">
                            <?php
                            if ($message) {
                                ?>
                                <div class="success-message"><?php echo $message ?></div>
                                <?php
                            }
                            if ($error) {
                                ?>
                                <div class="error-message"><?php echo $error ?></div>
                                <?php
                            }
                            ?>
                            <form action="registration.php" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="username" autofocus>نام و نام خانوادگی <span class="required">*</span></label>
                                            <input id="username" name="name" class="form-control" type="name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">ایمیل <span class="required">*</span></label>
                                            <input id="email"name="email" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="password">رمز عبور <span class="required">*</span></label>
                                            <input id="password"name="password" class="form-control" type="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">تکرار رمز عبور <span class="required">*</span></label>
                                            <input id="password"name="password-conf" class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb--0">
                                            <button class="btn-register" name="do-register"><span>ثبت نام</span></button>
                                        </div>
                                        <div class="account-bottom">
                                            <span class="d-block cate pt-10">قبلا ثبت نام کرده اید؟ <a href="login.php">ورود</a></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End My Account Area Wrapper ==-->
    </main>

    <?php require_once '../sections/footer.php' ?>

</body>

</html>