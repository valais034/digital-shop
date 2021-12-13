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
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Shome - Shoes eCommerce Website Template"/>
    <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce"/>
    <meta name="author" content="codecarnival"/>

    <title>سبد خرید</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Pe7 Stroke Icon CSS ==-->
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="assets/css/aos.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Header Wrapper ==-->
  <!--== End Header Wrapper ==-->
  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="assets/img/photos/bg3.jpg">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title" data-aos="fade-down" data-aos-duration="1000">سبد خرید</h2>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                <ul class="breadcrumb">
                  <li><a href="index.php">خانه</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>سبد خرید</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->


    <!--== Start Blog Area Wrapper ==-->
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
    <section class="shopping-cart-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="shopping-cart-form table-responsive">
              <form action="#" method="post">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th class="product-remove">&nbsp;</th>
                      <th class="product-thumb">&nbsp;</th>
                      <th class="product-name">نام محصول</th>
                      <th class="product-price">قیمت محصول</th>
                      <th class="product-quantity">تعداد</th>
                      <th class="product-subtotal">جمع مبلغ</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($cart_items as $cart_item) { ?>
                    <tr class="cart-product-item">
                      <td class="product-remove">
                        <a href="?delete-from-cart=<?php echo $cart_item['id'] ?>" onclick="return confirm('آیا میخواهید این محصول را از سبد خرید خود حذف کنید؟')"><i class="fa fa-trash-o"></i></a>
                      </td>
                      <td class="product-thumb">
                          <a href="product.php?product-id=<?php echo $cart_item['id'] ?>" target="_blank"><img src="assets/img/product/<?php echo $cart_item['product_image'] ?>" alt="product"></a>
                      </td>
                      <td class="product-name">
                          <a href="product.php?product-id=<?php echo $cart_item['id'] ?>" target="_blank"><?php echo $cart_item['product_name'] ?></a>
                      </td>
                      <td class="product-price">
                        <span class="price"><?php echo $cart_item['product_price'] ?> تومان</span>
                      </td>
                      <td class="product-quantity">
                        <div class="pro-qty">
                          <input type="text" class="quantity" title="Quantity" value="1">
                        </div>
                      </td>
                      <td class="product-subtotal">
                        <span class="price"><?php echo $cart_item['product_price'] ?> تومان</span>
                      </td>
                        <?php } ?>

                    </tr>
                    <tr class="actions">
                      <td class="border-0" colspan="6">
                        <button type="submit" class="update-cart" disabled>بروزرسانی سبد خرید</button>
                        <button type="submit" class="clear-cart">خالی نمودن سبد خرید</button>
                        <a href="shop.php" class="btn-theme btn-flat">ادامه خرید</a>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>
        <div class="row row-gutter-50">
          <div class="col-md-6 col-lg-4">
              <?php if (!is_login()) { ?>
                  <div style="text-align: center;font-size: 12px">برای ادامه کار و خرید، لطفا <a href="users/login.php">وارد شوید</a> و یا <a href="users/registration.php">ثبت نام کنید.</a></div>
              <?php } else { ?>
            <div id="CategoriesAccordion" class="shipping-form-calculate">
              <div class="section-title-cart">
                <h5 class="title">اطلاعات حساب کاربری</h5>
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
            </div>
              <?php } ?>

          </div>
          <div class="col-md-6 col-lg-4">
            <div class="shipping-form-coupon">
              <div class="section-title-cart">
                <h5 class="title">کوپن تخفیف</h5>
                <div class="desc">
                  <p>در صورتی که کد تخفیف دارید، لطفا در باکس زیر وارد نمایید</p>
                </div>
              </div>
              <form action="#" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="couponCode" class="visually-hidden">کد تخفیف</label>
                      <input type="text" id="couponCode" class="form-control" placeholder="کد تخفیف خود را وارد نمایید...">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <button type="submit" class="coupon-btn">ثبت کد تخفیف</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <div class="shipping-form-cart-totals">
              <div class="section-title-cart">
                <h5 class="title">فاکتور شما</h5>
              </div>
              <div class="cart-total-table">
                <table class="table">
                  <tbody>
<!--                    <tr class="cart-subtotal">-->
<!--                      <td>-->
<!--                        <p class="value">Subtotal</p>-->
<!--                      </td>-->
<!--                      <td>-->
<!--                        <p class="price">£128.00</p>-->
<!--                      </td>-->
<!--                    </tr>-->
<!--                    <tr class="shipping">-->
<!--                      <td>-->
<!--                        <p class="value">Shipping</p>-->
<!--                      </td>-->
<!--                      <td>-->
<!--                        <ul class="shipping-list">-->
<!--                          <li class="radio">-->
<!--                            <input type="radio" name="shipping" id="radio1" checked>-->
<!--                            <label for="radio1"><span></span> Flat Rate</label>-->
<!--                          </li>-->
<!--                          <li class="radio">-->
<!--                            <input type="radio" name="shipping" id="radio2">-->
<!--                            <label for="radio2"><span></span> Free Shipping</label>-->
<!--                          </li>-->
<!--                          <li class="radio">-->
<!--                            <input type="radio" name="shipping" id="radio3">-->
<!--                            <label for="radio3"><span></span> Local Pickup</label>-->
<!--                          </li>-->
<!--                        </ul>-->
<!--                      </td>-->
<!--                    </tr>-->
                    <tr class="order-total">
                      <td>
                        <p class="value">جمع کل:</p>
                      </td>
                      <td>
                        <p class="price"><?php echo $cart_total ?> تومان</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a class="btn-theme btn-flat" href="shop-checkout.html">ادامه خرید</a>
            </div>
          </div>
        </div>
          <?php } ?>

      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
    <?php require_once 'sections/footer.php' ?>
    <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="fa fa-close"></i></span>
        </button>
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/product-single/1.webp" width="570" height="541" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">Space X Bag For Office</h4>
              <div class="prices">
                <del class="price-old">$85.00</del>
                <span class="price">$70.00</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSize" class="form-label">Size:</label>
                  <select class="form-select" id="forSize" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColor" class="form-label">Color:</label>
                  <select class="form-select" id="forColor" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity20" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->

  <!--== Start Aside Cart Menu ==-->
  <div class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h1 id="offcanvasRightLabel"></h1>
      <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i class="fa fa-chevron-right"></i></button>
    </div>
    <div class="offcanvas-body">
      <ul class="aside-cart-product-list">
        <li class="product-list-item">
          <a href="#/" class="remove">×</a>
          <a href="single-product.html">
            <img src="assets/img/shop/product-mini/1.webp" width="90" height="110" alt="Image-HasTech">
            <span class="product-title">Leather Mens Slipper</span>
          </a>
          <span class="product-price">1 × £69.99</span>
        </li>
        <li class="product-list-item">
          <a href="#/" class="remove">×</a>
          <a href="single-product.html">
            <img src="assets/img/shop/product-mini/2.webp" width="90" height="110" alt="Image-HasTech">
            <span class="product-title">Quickiin Mens shoes</span>
          </a>
          <span class="product-price">1 × £20.00</span>
        </li>
      </ul>
      <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
      <a class="btn-theme" data-margin-bottom="10" href="cart.php">View cart</a>
      <a class="btn-theme" href="shop-checkout.html">Checkout</a>
      <a class="d-block text-end lh-1" href="shop-checkout.html"><img src="assets/img/photos/paypal.webp" width="133" height="26" alt="Has-image"></a>
    </div>
  </div>
  <!--== End Aside Cart Menu ==-->

  <!--== Start Aside Search Menu ==-->
  <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
      <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="pe-7s-close"></i></button>
    </div>
    <div class="offcanvas-body">
      <div class="container pt--0 pb--0">
        <div class="search-box-form-wrap">
          <div class="search-note">
            <p>Start typing and press Enter to search</p>
          </div>
          <form action="#" method="post">
            <div class="search-form position-relative">
              <label for="search-input" class="visually-hidden">Search</label>
              <input id="search-input" type="search" class="form-control" placeholder="Search entire store…">
              <button class="search-button"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </aside>
  <!--== End Aside Search Menu ==-->

  <!--== Start Side Menu ==-->
  <div class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h1 id="offcanvasExampleLabel"></h1>
      <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i class="fa fa-chevron-left"></i></button>
    </div>
    <div class="offcanvas-body">
      <div class="info-items">
        <ul>
          <li class="number"><a href="tel://0123456789"><i class="fa fa-phone"></i>+00 123 456 789</a></li>
          <li class="email"><a href="mailto://demo@example.com"><i class="fa fa-envelope"></i>demo@example.com</a></li>
          <li class="account"><a href="account-login.html"><i class="fa fa-user"></i>Account</a></li>
        </ul>
      </div>
      <!-- Mobile Menu Start -->
      <div class="mobile-menu-items">
        <ul class="nav-menu">
          <li><a href="#">Home</a>
            <ul class="sub-menu">
              <li><a href="index.php">Home One</a></li>
              <li><a href="index-two.html">Home Two</a></li>
            </ul>
          </li>
          <li><a href="about-us.php">About</a></li>
          <li><a href="#">Pages</a>
            <ul class="sub-menu">
              <li><a href="account.html">Account</a></li>
              <li><a href="account-login.html">Login</a></li>
              <li><a href="account-register.html">Register</a></li>
              <li><a href="page-not-found.html">Page Not Found</a></li>
            </ul>
          </li>
          <li><a href="#">Shop</a>
            <ul class="sub-menu">
              <li><a href="#">Shop Layout</a>
                <ul class="sub-menu">
                  <li><a href="shop-three-columns.html">Shop 3 Column</a></li>
                  <li><a href="shop-four-columns.html">Shop 4 Column</a></li>
                  <li><a href="shop.php">Shop Left Sidebar</a></li>
                  <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                </ul>
              </li>
              <li><a href="#">Single Product</a>
                <ul class="sub-menu">
                  <li><a href="single-normal-product.html">Single Product Normal</a></li>
                  <li><a href="single-product.html">Single Product Variable</a></li>
                  <li><a href="single-group-product.html">Single Product Group</a></li>
                  <li><a href="single-affiliate-product.html">Single Product Affiliate</a></li>
                </ul>
              </li>
              <li><a href="#">Others Pages</a>
                <ul class="sub-menu">
                  <li><a href="cart.php">Shopping Cart</a></li>
                  <li><a href="shop-checkout.html">Checkout</a></li>
                  <li><a href="shop-wishlist.html">Wishlist</a></li>
                  <li><a href="shop-compare.html">Compare</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Blog</a>
            <ul class="sub-menu">
              <li><a href="#">Blog Layout</a>
                <ul class="sub-menu">
                  <li><a href="blog.html">Blog Grid</a></li>
                  <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                  <li><a href="blog.php">Blog Right Sidebar</a></li>
                </ul>
              </li>
              <li><a href="#">Single Blog</a>
                <ul class="sub-menu">
                  <li><a href="blog-details-no-sidebar.html">Blog Details</a></li>
                  <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                  <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <!-- Mobile Menu End -->
    </div>
  </div>
  <!--== End Side Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jQuery Ui Min Js ===-->
<script src="assets/js/jquery-ui.min.js"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jQuery Waypoint Js ===-->
<script src="assets/js/waypoint.js"></script>
<!--=== jQuery Parallax Min Js ===-->
<script src="assets/js/parallax.min.js"></script>
<!--=== jQuery Aos Min Js ===-->
<script src="assets/js/aos.min.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="assets/js/custom.js"></script>

</body>

</html>