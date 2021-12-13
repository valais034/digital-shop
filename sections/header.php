
<?php
$products = get_products(6);
$cart_items = get_cart_items();
$cart_total = cart_total();
$number_of_cart_items = mysqli_query($db, "SELECT * FROM cart");
$cart_total_final = $cart_total+30;
if (is_login()) {
$user_data = get_userdata();
}
?>

<!doctype html>
<html lang="en">
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>دیجی شاپ</title>-->
<!--    <link rel="stylesheet" href="--><?php //echo PATH; ?><!--styles/styles.css">-->
<!--    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->


<script type="text/javascript" src="relative/path/to/your/javascript.js"></script>
<script>
/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</head>
<body>


    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--f-->
    <header class="main-header-wrapper position-relative">
        <div class="header-top">

            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="header-top-align">
                            <div class="header-top-align-start">
                                <div class="desc">
                                    <p>حمل رایگان در تهران برای سفارشات بالای 200 هزار تومان</p>
                                </div>
                            </div>
                            <div class="header-top-align-end">
                                <div class="header-info-items">
                                    <div class="info-items">
                                        <ul>
                                            <li class="number"><i class="fa fa-phone"></i><a href="tel://+982166388810"> 02166388810</a></li>
                                            <li class="email"><i class="fa fa-envelope"></i><a href="mailto://info@digital-shop.com"> info@digital-shop.com</a></li>
                                            <li class="account"><i class="fa fa-user"></i><a href="<?php echo PATH; ?>/users/login.php"> پنل کاربری</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container pt--0 pb--0">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="header-middle-align">
                            <div class="header-middle-align-start">
                                <div class="header-logo-area">
                                    <a href="index.php">
                                        <img class="logo-main" src="assets/img/logo.png" width="131" height="34" alt="Logo" />
                                        <img class="logo-light" src="assets/img/logo-light.webp" width="131" height="34" alt="Logo" />
                                    </a>
                                </div>
                            </div>
                            <div class="header-middle-align-center">
                                <div class="header-search-area">
                                    <form class="header-searchbox">
                                        <input type="search" class="form-control" placeholder="جستجو...">
                                        <button class="btn-submit" type="submit"><i class="pe-7s-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-middle-align-end">
                                <div class="header-action-area">
                                    <div class="shopping-search">
                                        <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                                    </div>
                                    <div class="shopping-wishlist">
                                        <a class="shopping-wishlist-btn" href="#">
                                            <i class="pe-7s-like icon"></i>
                                        </a>
                                    </div>
                                    <div class="shopping-cart">
                                        <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                                            <i class="pe-7s-shopbag icon"></i>
                                            <sup class="shop-count"><?php echo mysqli_num_rows($number_of_cart_items);?></sup>
                                        </button>
                                    </div>
                                    <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                        <i class="pe-7s-menu"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area header-default">
            <div class="container">
                <div class="row no-gutter align-items-center position-relative">
                    <div class="col-12">
                        <div class="header-align">
                            <div class="header-navigation-area position-relative">
                                <ul class="main-menu nav">
                                    <li><a href="<?php echo PATH; ?>"><span>خانه</span></a></li>
                                    <li><a href="<?php echo PATH; ?>/shop.php"><span>محصولات</span></a></li>
                                    <li class="has-submenu position-static"><a href="#"><span>دسته بندی</span></a>
                                        <ul class="submenu-nav submenu-nav-mega column-3">
                                            <li class="mega-menu-item"><a href="#" class="mega-title"><span>تلفن همراه</span></a>
                                                <ul>
                                                    <li><a href="#"><span>اپل</span></a></li>
                                                    <li><a href="#"><span>سامسونگ</span></a></li>
                                                    <li><a href="#"><span>شیائومی</span></a></li>
                                                    <li><a href="#"><span>موتورولا</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item"><a href="#" class="mega-title"><span>لپ تاپ</span></a>
                                                <ul>
                                                    <li><a href="#"><span>مایکروسافت</span></a></li>
                                                    <li><a href="#"><span>اپل</span></a></li>
                                                    <li><a href="#"><span>لنوو</span></a></li>
                                                    <li><a href="#"><span>ایسر</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-item"><a href="#" class="mega-title"><span>لوازم جانبی</span></a>
                                                <ul>
                                                    <li><a href="#"><span>انکر</span></a></li>
                                                    <li><a href="#"><span>آکی</span></a></li>
                                                    <li><a href="#"><span>شیائومی</span></a></li>
                                                    <li><a href="#"><span>انرجایزر</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
<!--                                    <li class="has-submenu"><a href="#"><span>بلاگ</span></a>-->
<!--                                        <ul class="submenu-nav submenu-nav-mega ">-->
<!--                                            <li class="mega-menu-item"><a href="#" class="mega-title">بلاگ استایل</a>-->
<!--                                                <ul>-->
<!--                                                    <li><a href="blog.html">بلاگ گرید</a></li>-->
<!--                                                    <li><a href="blog-left-sidebar.html">بلاگ با سایدبار چپ</a></li>-->
<!--                                                    <li><a href="blog-right-sidebar.html">بلاگ با سایدبار راست</a></li>-->
<!--                                                </ul>-->
<!--                                            </li>-->
<!--                                            <li class="mega-menu-item"><a href="#" class="mega-title">بلاگ تکی</a>-->
<!--                                                <ul>-->
<!--                                                    <li><a href="blog-details-no-sidebar.html">جزئیات بلاگ</a></li>-->
<!--                                                    <li><a href="blog-details-left-sidebar.html">جزئیات بلاگ با سایدبار چپ</a></li>-->
<!--                                                    <li><a href="blog-details.html">جزئیات بلاگ با سایدبار راست</a></li>-->
<!--                                                </ul>-->
<!--                                            </li>-->
<!---->
<!--                                        </ul>-->
<!--                                    </li>-->
                                    <li><a href="blog.php">بلاگ</a></li>
                                    <li><a href="contact.php"><span>تماس با ما</span></a></li>
                                    <li><a href="about-us.php"><span>درباره ما</span></a></li>
                                    <li><a href="blog-details.html"><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!--== Start Aside Cart Menu ==-->
    <div class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h1 id="offcanvasRightLabel"></h1>
            <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">سبد خرید <i class="fa fa-chevron-right"></i></button>
        </div>
        <div class="offcanvas-body">
            <ul class="aside-cart-product-list">
                <?php foreach ($cart_items as $cart_item) { ?>

                <li class="product-list-item">
                    <a href="#" class="remove">×</a>
                    <a href="product.php?product-id=<?php echo $cart_item['id'] ?> " target="_blank">
                        <img src="assets/img/product/<?php echo $cart_item['product_image'] ?>" alt="product">
                        <span class="product-title"><?php echo $cart_item['product_name'] ?></span>
                    </a>
                    <span class="product-price"><?php echo $cart_item['product_price'] ?> تومان</span>
                </li>
                <?php } ?>

            </ul>
            <p class="cart-total"><span class="amount"><?php echo $cart_total ?> تومان</span><span>جمع سبد خرید:</span></p>
            <a class="btn-theme" data-margin-bottom="10" href="cart.php">سبد خرید</a>
<!--            <a class="btn-theme" href="shop-checkout.html">Checkout</a>-->
<!--            <a class="d-block text-end lh-1" href="shop-checkout.html"><img src="assets/img/photos/paypal.webp" width="133" height="26" alt="Has-image"></a>-->
        </div>
    </div>
    <!--== End Aside Cart Menu ==-->