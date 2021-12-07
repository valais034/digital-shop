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
    <?php if (isset($_GET['email']) && isset($_GET['hash'])) { ?>
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
        <form action="do-reset.php" method="post">
            <p>رمز جدید خود و تکرار آن را وارد نمایید:</p>
            <input type="password" name="pass" placeholder="رمز جدید ...">
            <input type="password" name="pass-conf" placeholder="تکرار رمز جدید ..." style="margin-top: 10px">
            <input type="hidden" name="user-email" value="<?php echo $_GET['email'] ?>">
            <input type="hidden" name="user-hash" value="<?php echo $_GET['hash'] ?>">

            <input type="submit" name="reset-pass" value="بروزرسانی کلمه عبور">
        </form>
                <?php } else {
        echo 'آدرس درخواستی نامعتبر می‌باشد.';
    } ?>
            </div>
</div>
</div>
</div>
            <div class="clear"></div>
            <?php require_once '../sections/footer.php' ?>
</body>
</html>