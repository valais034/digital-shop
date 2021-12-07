<?php require_once '../inc/config.php';
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
<div class="login-section padding-tb">

    <div class=" container">

        <div class="account-wrapper">
            <div class="forms-box">
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
                <h3 class="title">ورود به آدیداس اسپورت</h3>
                <form action="forgot.php" method="post">
                    <p>برای بازیابی کلمه عبور، ایمیلی که با آن در سایت ثبت نام کرده بودید را وارد نمایید:</p>
                    <input type="email" name="email" placeholder="ایمیل شما ...">
                    <input type="submit" name="forgot-pass" value="بازیابی کلمه عبور">
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">اکانت ندارید؟ <a href="registration.php"> ثبت نام</a></span>
                    <span class="or"><span>یا</span></span>
                    <h5 class="subtitle">لوگین با شبکه های اجتماعی</h5>
                    <ul class="social-media social-color lab-ul d-flex justify-content-center">
                        <li>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="clear"></div>
<?php require_once '../sections/footer.php' ?>
</body>
</html>