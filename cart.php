<?php require_once 'inc/config.php'; ?>
<?php
$products = get_products(6);
$cart_items = get_cart_items();
$cart_total = cart_total();
if (is_login()) {
    $user_data = get_userdata();
}
?>
<?php
require_once 'sections/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kagont</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">سبد خرید</h4>
                <ul class="lab-ul">
                    <li><a href="index.php">صفحه اصلی</a></li>
                    <li><a href="#">محصولات</a></li>
                    <li><a class="active">سبد خرید</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Shop Cart Page Section start here -->
    <div class="shop-cart padding-tb">
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
        <?php if (!$cart_items) { ?>
            <div style="text-align: center;font-size: 13px">سبد خرید شما خالی است. لطفا از فروشگاه، اقدام به پر کردن سبد خرید خود کنید.</div>
        <?php } else { ?>
        <div class="container">
            <div class="section-wrapper">
                <div class="cart-top">
                    <table>
                        <thead>
                            <tr>
                                <th>نام محصول</th>
                                <th>قیمت محصول</th>
                                <th>تعداد</th>
                                <th>جمع مبلغ</th>
                                <th>ویرایش</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($cart_items as $cart_item) { ?>
                            <tr>
                                <td class="product-item">
                                    <div class="p-thumb rounded">
                                        <a href="product.php?product-id=<?php echo $cart_item['id'] ?>" target="_blank"><img src="assets/images/product/<?php echo $cart_item['product_image'] ?>" alt="product"></a>
                                    </div>
                                    <div class="p-content">
                                        <a href="product.php?product-id=<?php echo $cart_item['id'] ?>" target="_blank"><?php echo $cart_item['product_name'] ?></a>                                    </div>
                                </td>
                                <td><?php echo $cart_item['product_price'] ?> تومان</td>
                                <td>
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="3">
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </td>
                                <td><?php echo $cart_item['product_price'] ?> تومان</td>
                                <td>
                                    <a href="?delete-from-cart=<?php echo $cart_item['id'] ?>" onclick="return confirm('آیا میخواهید این محصول را از سبد خرید خود حذف کنید؟')"><img src="assets/images/del.png" alt="product"></a>
                                </td>
                            </tr>
                        <?php } ?>

                            <tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart-bottom">
                    <div class="cart-checkout-box">
                        <form action="/" class="coupon">
                            <input type="text" name="coupon" placeholder="Coupon Code..." class="cart-page-input-text">
                            <input type="submit" value="Apply Coupon">
                        </form>
                        <form action="/" class="cart-checkout">
<!--                            <input type="submit" value="Update Cart">-->
                            <input type="submit" value="Proceed to Checkout">
                        </form>
                    </div>
                    <div class="shiping-box">
                        <div class="row">
                            <div class="col-md-6 col-12">


                                <?php if (!is_login()) { ?>
                                <div style="text-align: center;font-size: 12px">برای ادامه کار و خرید، لطفا <a href="users/login.php">وارد شوید</a> و یا <a href="users/registration.php">ثبت نام کنید.</a></div>
                                <?php } else { ?>
                                <h4>اطلاعات حساب کاربری</h4>
                                <div class="user-info">
                                    <table>
                                        <tr>
                                            <td>نام شما:</td>
                                            <td><?php echo $user_data['display_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>آدرس ایمیل:</td>
                                            <td><?php echo $user_data['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>شماره تماس:</td>
                                            <td><?php echo $user_data['user_number'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>آدرس پستی:</td>
                                            <td><?php echo $user_data['user_address'] ?></td>
                                        </tr>
                                    </table>
                                </div>

                                <form action="cart.php" method="post">

                                    <input type="hidden" name="user-email" value="<?php echo $user_data['email'] ?>">
                                    <input type="hidden" name="user-number" value="<?php echo $user_data['user_number'] ?>">
                                    <input type="hidden" name="cart-total" value="<?php echo $cart_total ?>">
                                    <input type="hidden" name="product-ids" value="<?php
                                    foreach ($cart_items as $cart_item) {
                                        echo $cart_item['id'] . ', ';
                                    }

                                    ?>">

                                    <input type="submit" name="submit-order" value="پرداخت در محل">
                                </form>
                                    <br>
                                    <form action="cart.php" method="post">

                                        <input type="hidden" name="user-email" value="<?php echo $user_data['email'] ?>">
                                        <input type="hidden" name="user-number" value="<?php echo $user_data['user_number'] ?>">
                                        <input type="hidden" name="cart-total" value="<?php echo $cart_total ?>">
                                        <input type="hidden" name="product-ids" value="<?php
                                        foreach ($cart_items as $cart_item) {
                                            echo $cart_item['id'] . ', ';
                                        }

                                        ?>">

                                        <input type="submit" name="submit-order-online" value="پرداخت آنلاین">
                                    </form>
                                <?php } ?>


                            </div>
                            <div class="col-md-6 col-12">
                                <div class="cart-overview">
                                    <h4>فاکتور شما:</h4>
                                    <ul>
                                        <li>
                                            <span class="pull-left">جمع مبالغ</span>
                                            <p class="pull-right" style="color: whitesmoke"><?php echo $cart_total ?> تومان</p>
                                        </li>
                                        <li>
                                            <span class="pull-left">هزینه ارسال (پیک موتوری)</span>
                                            <p class="pull-right" style="color: whitesmoke">30 تومان</p>
                                        </li>
                                        <li>
                                            <span class="pull-left">جمع کل:</span>
                                            <p class="pull-right" style="color: whitesmoke"> تومان</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
    <!-- Shop Cart Page Section ending here -->

    <!-- Footer Section start here -->
    <?php require_once 'sections/footer.php' ?>
    <!-- Footer Section end here -->



    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/circularProgressBar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>