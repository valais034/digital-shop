<?php
require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
$posts = get_posts(3);

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Shome - Shoes eCommerce Website Template"/>
    <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce"/>
    <meta name="author" content="esmaeil ali hosseini"/>

    <title>digital shop فروشگاه اینترنتی دیجیتال شاپ</title>

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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Header Wrapper ==-->
  <!--== End Header Wrapper ==-->
  
  <main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper-container home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="assets/img/shape/1.webp">
              <div class="container">
                <div class="slider-container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-sm-6 col-md-5">
                      <div class="slider-content">
                        <div class="content">
                          <div class="title-box">
                            <h2 class="title">جدید ترین تکنولوژی</h2>
                          </div>
                          <div class="desc-box">
                            <p class="desc">در دستان شماست</p>
                          </div>
                          <div class="btn-box">
                            <a class="btn-slider" href="shop.php">خرید کنید...</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="slider-thumb">
                        <div class="thumb scene">
                          <span class="scene-layer" data-depth=".3"><img src="assets/img/slider/slider-01.webp" width="461" height="489" alt="Image-HasTech"></span>
                        </div>
                        <div class="shape-group mousemove">
                          <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="assets/img/shape/2.webp"></div>
                          <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="assets/img/shape/3.webp" width="471" height="462" alt="Image-HasTech"></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="slider-text-shape">13 PRO MAX</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="assets/img/shape/1.webp">
              <div class="container">
                <div class="slider-container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-sm-6 col-md-5">
                      <div class="slider-content">
                        <div class="content">
                          <div class="title-box">
                            <h2 class="title">در رنگبندی های متنوع</h2>
                          </div>
                          <div class="desc-box">
                            <p class="desc">با گارانتی و تضمین اصالت</p>
                          </div>
                          <div class="btn-box">
                            <a class="btn-slider" href="shop.php">خرید کنید...</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="slider-thumb">
                        <div class="thumb scene">
                          <span class="scene-layer" data-depth=".3"><img src="assets/img/slider/slider-03.webp" width="548" height="649" alt="Image-HasTech"></span>
                        </div>
                        <div class="shape-group mousemove">
                          <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="assets/img/shape/2.webp"></div>
                          <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="assets/img/shape/3.webp" width="471" height="462" alt="Image-HasTech"></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="slider-text-shape">NEW 2022</h2>
            </div>
          </div>
        </div>

        <!--== Add Swiper Arrows ==-->
        <div class="swiper-btn-wrap">
          <div class="swiper-btn-prev">
              <i class="pe-7s-angle-right"></i>
          </div>
          <div class="swiper-btn-next">
              <i class="pe-7s-angle-left"></i>
          </div>
        </div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Collection Area Wrapper ==-->
    <section class="product-area product-collection-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <!--== Start Product Collection Item ==-->
            <div class="product-collection">
              <div class="inner-content">
                <div class="product-collection-content">
                  <div class="content">
<!--                    --><?php
//                    require_once 'connection.php';
//                    $sql = "SELECT * FROM 'vitrin_tbl'";
//                    $pre = $connect->prepare($sql);
//                    $pre->execute();
//                    while ($result = $pre->fetch(PDO::FETCH_ASSOC)) {
//                    $img = $result['img'];
//                    echo $img;
//                    }
//                    ?>
                    <h3 class="title"><a href="shop.php">تلفن همراه</a></h3>
                    <h4 class="price">برترین ها و جدیدترین ها</h4>
                  </div>
                </div>
                <div class="product-collection-thumb" data-bg-img="assets/img/shop/collection/1.jpg"></div>
                <a class="banner-link-overlay" href="shop.php"></a>
              </div>
            </div>
            <!--== End Product Collection Item ==-->
          </div>
          <div class="col-lg-4 col-md-6">
            <!--== Start Product Collection Item ==-->
            <div class="product-collection">
              <div class="inner-content">
                <div class="product-collection-content">
                  <div class="content">
                    <h3 class="title"><a href="shop.php">لپ تاپ</a></h3>
                    <h4 class="price">از برترین برندها</h4>
                  </div>
                </div>
                <div class="product-collection-thumb" data-bg-img="assets/img/shop/collection/2.jpg"></div>
                <a class="banner-link-overlay" href="shop.php"></a>
              </div>
            </div>
            <!--== End Product Collection Item ==-->
          </div>
          <div class="col-lg-4 col-md-6">
            <!--== Start Product Collection Item ==-->
            <div class="product-collection">
              <div class="inner-content">
                <div class="product-collection-content">
                  <div class="content">
                    <h3 class="title"><a href="shop.php">لوازم جانبی</a></h3>
                    <h4 class="price">برترین کیفیت و قیمت</h4>
                  </div>
                </div>
                <div class="product-collection-thumb" data-bg-img="assets/img/shop/collection/3.jpg"></div>
                <a class="banner-link-overlay" href="shop.php"></a>
              </div>
            </div>
            <!--== End Product Collection Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Collection Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-default-area">
      <div class="container pt--0">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">محصولات تخفیف دار</h3>
              <div class="desc">
                <p>گلچین محصولاتی که دارای تخفیف ویژه هستند</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/1.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-flag">
                    <ul>
                      <li class="discount">-10%</li>
                    </ul>
                  </div>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.php"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.php">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Leather Mens Slipper</a></h4>
                  <div class="prices">
                    <span class="price-old">$100</span>
                    <span class="sep">-</span>
                    <span class="price">$240.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/2.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.php"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.php">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Quickiin Mens shoes</a></h4>
                  <div class="prices">
                    <span class="price">$140.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/3.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-flag">
                    <ul>
                      <li class="discount">-10%</li>
                    </ul>
                  </div>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.php"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.php">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Rexpo Womens shoes</a></h4>
                  <div class="prices">
                    <span class="price-old">$60</span>
                    <span class="sep">-</span>
                    <span class="price">$260.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/4.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.php"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.php">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Hollister V-Neck Knit</a></h4>
                  <div class="prices">
                    <span class="price">$880.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/5.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.php"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.php">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Primitive Mens shoes</a></h4>
                  <div class="prices">
                    <span class="price">$500.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/6.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-flag">
                    <ul>
                      <li class="discount">-10%</li>
                    </ul>
                  </div>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.php"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.php">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">New Womens High Hills</a></h4>
                  <div class="prices">
                    <span class="price-old">$300</span>
                    <span class="sep">-</span>
                    <span class="price">$333.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/7.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.php"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.php">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">Simple Fabric Shoe</a></h4>
                  <div class="prices">
                    <span class="price">$133.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="assets/img/shop/8.webp" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-flag">
                    <ul>
                      <li class="discount">-10%</li>
                    </ul>
                  </div>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.php"></a>
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.php">Women</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="single-product.html">exclusive mens shoe</a></h4>
                  <div class="prices">
                    <span class="price-old">$300</span>
                    <span class="sep">-</span>
                    <span class="price">$420.00</span>
                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section class="bg-color-f2 position-relative z-index-1">
      <div class="container pt--0 pb--0">
        <div class="row divider-wrap divider-style1">
          <div class="col-lg-6">
            <div class="divider-content" data-title="NEW">
              <h4 class="sub-title">خاص ترین ها</h4>
              <h2 class="title">فقط در دیجیتال شاپ</h2>
              <p class="desc">گوشی های CAT در انواع گوناگون</p>
              <a class="btn-theme" href="shop.php">مشاهده...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-layer-wrap">
        <div class="bg-layer-style z-index--1 parallax" data-speed="1.05" data-bg-img="assets/img/photos/bg1.jpg"></div>
      </div>
    </section>
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-best-seller-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">اسلایدر محصولات</h3>
              <div class="desc">
                <p>محصولات جدید دیجی مارکت</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-slider-wrap">
              <div class="swiper-container product-slider-col4-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->

                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.html">
                            <img src="assets/img/shop/1.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-flag">
                            <ul>
                              <li class="discount">-10%</li>
                            </ul>
                          </div>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.html">Modern Smart Shoes</a></h4>
                          <div class="prices">
                            <span class="price-old">$200</span>
                            <span class="sep">-</span>
                            <span class="price">$240.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.html">
                            <img src="assets/img/shop/7.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.html">Quickiin Mens shoes</a></h4>
                          <div class="prices">
                            <span class="price">$440.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.html">
                            <img src="assets/img/shop/3.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-flag">
                            <ul>
                              <li class="discount">-10%</li>
                            </ul>
                          </div>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.html">Rexpo Womens shoes</a></h4>
                          <div class="prices">
                            <span class="price-old">$130</span>
                            <span class="sep">-</span>
                            <span class="price">$333.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.html">
                            <img src="assets/img/shop/4.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.html">Leather Mens Slipper</a></h4>
                          <div class="prices">
                            <span class="price">$540.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.html">
                            <img src="assets/img/shop/5.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.html">Primitive Mens shoes</a></h4>
                          <div class="prices">
                            <span class="price-old">$40</span>
                            <span class="sep">-</span>
                            <span class="price">$280.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="single-product.html">
                            <img src="assets/img/shop/6.webp" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <div class="product-flag">
                            <ul>
                              <li class="discount">-10%</li>
                            </ul>
                          </div>
                          <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                          <a class="banner-link-overlay" href="shop.php"></a>
                        </div>
                        <div class="product-info">
                          <div class="category">
                    <ul>
                      <li><a href="shop.php">Men</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.php">Women</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="single-product.html">Simple Fabric Shoe</a></h4>
                          <div class="prices">
                            <span class="price-old">$400</span>
                            <span class="sep">-</span>
                            <span class="price">$580.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                </div>
              </div>
              <!--== Add Swiper Arrows ==-->
              <div class="product-swiper-btn-wrap">
                <div class="product-swiper-btn-prev">
                  <i class="fa fa-arrow-left"></i>
                </div>
                <div class="product-swiper-btn-next">
                  <i class="fa fa-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section>
      <div class="container pt--0 pb--0">
        <div class="row flex-md-row-reverse justify-content-between divider-wrap divider-style2">
          <div class="col-lg-6">
            <div class="divider-thumb-content">
              <div class="thumb">
                <a href="shop.php">
                  <img src="assets/img/shop/banner/1.jpg" width="570" height="350" alt="Image-HasTech">
                </a>
              </div>
              <div class="content">
                <h2 class="title">محصولات ANKER</h2>
                <p class="desc">فروش ویژه شگفت انگیز، تخفیف تا 25 درصد</p>
                <a class="btn-theme" href="shop.php">محصولات انکر</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="divider-thumb-content">
              <div class="thumb">
                <a href="shop.php">
                  <img src="assets/img/shop/banner/2.jpg" width="570" height="700" alt="Image-HasTech">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-default-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">جدیدترین مطالب وب</h3>
              <div class="desc">
                <p>گزیده ای کوتاه از سرتاسر دنیای دیجیتال</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="blog-details.html"><img src="assets/img/blog/1.webp" width="370" height="260" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <div class="meta-post">
                    <ul>
                      <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">27,Jun 2030</a></li>
                      <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor ametcons adipisicing elit sed</a></h4>
                  <a class="post-btn" href="blog.html">Read More</a>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="blog-details.html"><img src="assets/img/blog/2.webp" width="370" height="260" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <div class="meta-post">
                    <ul>
                      <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">27,Jun 2030</a></li>
                      <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="blog-details.html">Celebrity Daughter Opens About Upto Having Her Eye</a></h4>
                  <a class="post-btn" href="blog.html">Read More</a>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="blog-details.html"><img src="assets/img/blog/3.webp" width="370" height="260" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <div class="meta-post">
                    <ul>
                      <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">27,Jun 2030</a></li>
                      <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="blog-details.html">Romantic Love Stories Of Hollywood Popular Celebrities</a></h4>
                  <a class="post-btn" href="blog.html">Read More</a>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
        </div>
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
          <li><a href="about-us.html">About</a></li>
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