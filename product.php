<?php require_once 'inc/config.php';
require_once 'sections/header.php';
?>
<?php
if ($_GET['product-id']) {
    $product_id = $_GET['product-id'];
    $product_info = mysqli_fetch_array(get_product_by_id($product_id));
}
$pcomments = get_comments_by_product_id($product_id);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Shome - Shoes eCommerce Website Template"/>
    <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce"/>
    <meta name="author" content="codecarnival"/>

    <title>جزئیات <?php echo $product_info['product_name'] ?></title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

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
                            <h2 class="title" data-aos="fade-down" data-aos-duration="1000">محصول <?php echo $product_info['product_name'] ?></h2>
                            <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                                <ul class="breadcrumb">
                                    <li><a href="index.php">خانه</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>جزئیات محصول</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Product Single Area Wrapper ==-->
        <section class="product-area product-single-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-single-item">
                            <div class="row">
                                <div class="col-xl-6">
                                    <!--== Start Product Thumbnail Area ==-->
                                    <div class="product-single-thumb">
                                        <div class="swiper-container single-product-thumb single-product-thumb-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/product/<?php echo $product_info['product_image'] ?>">
                                                        <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/product/<?php echo $product_info['product_image'] ?>">
                                                        <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/product/<?php echo $product_info['product_image'] ?>">
                                                        <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/product/<?php echo $product_info['product_image'] ?>">
                                                        <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="assets/img/product/<?php echo $product_info['product_image'] ?>">
                                                        <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-container single-product-nav single-product-nav-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" width="127" height="127" alt="Image-HasTech">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" width="127" height="127" alt="Image-HasTech">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" width="127" height="127" alt="Image-HasTech">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" width="127" height="127" alt="Image-HasTech">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="assets/img/product/<?php echo $product_info['product_image'] ?>" width="127" height="127" alt="Image-HasTech">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Thumbnail Area ==-->
                                </div>
                                <div class="col-xl-6">
                                    <!--== Start Product Info Area ==-->
                                    <div class="product-single-info">
                                        <h3 class="main-title"><?php echo $product_info['product_name'] ?></h3>
                                        <h6 class="mb-3">
                                            دسته‌بندی: <?php echo $product_info['product_cat'] ?>
                                        </h6>
                                        <div class="prices">
                                            <span class="price">
                                    قیمت محصول: <?php echo $product_info['product_price'] ?> تومان </h5></span>
                                        </div>
                                        <div class="rating-box-wrap">
                                            <div class="rating-box">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="review-status">
                                                <a href="javascript:void(0)">امتیازبندی</a>
                                            </div>
                                        </div>
                                        <p><?php echo $product_info['product_desc'] ?></p>
                                        <div class="product-color">
                                            <h6 class="title">رنگ</h6>
                                            <ul class="color-list">
                                                <li  data-bg-color="#586882"></li>
                                                <li class="active" data-bg-color="#505050"></li>
                                                <li data-bg-color="#73707a"></li>
                                                <li data-bg-color="#c7bb9b"></li>
                                            </ul>
                                        </div>
                                        <div class="product-size">
                                            <h6 class="title">سایز</h6>
                                            <ul class="size-list">
                                                <li>S</li>
                                                <li class="active">M</li>
                                                <li>L</li>
                                                <li>XL</li>
                                            </ul>
                                        </div>
                                        <div class="product-quick-action">
                                            <div class="qty-wrap">
                                                <div class="pro-qty">
                                                    <input type="text" title="Quantity" value="1">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn-theme" style="background: white "><a href="?add-to-cart=<?php echo $product_info['id'] ?>">افزودن به سبد خرید</a></button>
                                        </div>
                                        <div class="product-wishlist-compare">
                                            <a href="shop-wishlist.html"><i class="pe-7s-like"></i>افزودن به علاقه مندی ها</a>
                                            <a href="shop-compare.html"><i class="pe-7s-shuffle"></i>مقایسه</a>
                                        </div>
                                        <div class="product-info-footer">
                                            <h6 class="code"><span>کد محصول:</span><?php echo $product_info['product_serial'] ?></h6>
                                            <div class="social-icons">
                                                <span>اشتراک گذاری</span>
                                                <a href="#/"><i class="fa fa-facebook"></i></a>
                                                <a href="#/"><i class="fa fa-dribbble"></i></a>
                                                <a href="#/"><i class="fa fa-pinterest-p"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Info Area ==-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="product-review-tabs-content">
                            <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                                <li role="presentation">
                                    <a class="active" id="information-tab" data-bs-toggle="pill" href="#information" role="tab" aria-controls="information" aria-selected="true">اطلاعات محصول</a>
                                </li>
                                <li role="presentation">
                                    <a id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">توضیحات محصول</a>
                                </li>
                                <li role="presentation">
                                    <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">نظرات <span>(05)</span></a>
                                </li>
                            </ul>
                            <div class="tab-content product-tab-content" id="ReviewTabContent">
                                <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                                    <div class="product-information">
                                        <p>اطلاعاتی برای این محصول درج نگردیده است.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="product-description">
                                        <p><?php echo $product_info['product_desc'] ?></p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="product-review-content">
                                        <div class="review-content-header">
                                            <h3>نظرات کاربران</h3>
                                            <div class="review-info">
                                                <ul class="review-rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star-o"></li>
                                                </ul>
                                                <span class="review-caption">به این محصول امتیاز بدهید</span>
                                                <span class="review-write-btn">درج نظر</span>
                                            </div>
                                        </div>

                                        <!--== Start Reviews Form Item ==-->
                                        <div class="reviews-form-area">
                                            <h4 class="title">نظر خود را بنویسید...</h4>
                                            <div class="reviews-form-content">
                                                <form action="product.php?product-id=<?php echo $product_id ?>" method="post">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="for_name">نام</label>
                                                                <input id="for_name" class="form-control" name="username" placeholder="نام ...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="for_email">ایمیل:</label>
                                                                <input id="for_email" class="form-control" name="email" placeholder="ایمیل ...">
                                                            </div>
                                                        </div>


                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="for_comment">متن نظر:</label>
                                                                <textarea id="for_comment" class="form-control" name="comment_text" placeholder="متن نظر شما ..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-submit-btn">
                                                                <input type="hidden" name="product-id" value="<?php echo $product_id ?>">
                                                                <button class="btn-submit" type="submit" name="add-comment">ثبت نظر</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--== End Reviews Form Item ==-->

                                        <div class="reviews-content-body">
                                            <!--== Start Reviews Content Item ==-->
                                            <?php while ($pcomment = mysqli_fetch_array($pcomments)) { ?>
                                            <div class="review-item">
                                                <ul class="review-rating">
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                    <li class="fa fa-star"></li>
                                                </ul>
                                                <h3 class="title"></h3>
                                                <h5 class="sub-title"><span><?php echo $pcomment['username'] ?></span> در <span>۱۲ فروردین ۱۳۹۶</span></h5>
                                                <p><?php echo $pcomment['comment_text'] ?></p>
                                            </div>
                                            <!--== End Reviews Content Item ==-->
                                                <?php if ($pcomment['comment_answer']) { ?>
                                                    <div class="comment-answer"><?php echo $pcomment['comment_answer'] ?></div>
                                                <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </div>


                                        </div>

                                        <!--== Start Reviews Pagination Item ==-->
                                        <div class="review-pagination">
                                            <span class="pagination-pag">1</span>
                                            <span class="pagination-pag">2</span>
                                            <span class="pagination-next">Next »</span>
                                        </div>
                                        <!--== End Reviews Pagination Item ==-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Single Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="product-area product-best-seller-area">
            <div class="container pt--0">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">محصولات مشابه </h3>
                            <div class="desc">
                                <p>محصولات زیر در دسته بندی مشابه محصول فوق هستند.</p>
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
                                                        <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                                        <span class="price-old">$300</span>
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
                                                        <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                                        <img src="assets/img/shop/3.webp" width="270" height="274" alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-flag">
                                                        <ul>
                                                            <li class="discount">-10%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                                                        <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                                        <span class="price-old">$300</span>
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
                                                        <img src="assets/img/shop/4.webp" width="270" height="274" alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                                                        <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                                        <img src="assets/img/shop/5.webp" width="270" height="274" alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                                                        <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                                        <span class="price-old">$300</span>
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
                                                        <img src="assets/img/shop/6.webp" width="270" height="274" alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-flag">
                                                        <ul>
                                                            <li class="discount">-10%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                                                        <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                                                        <span class="price-old">$300</span>
                                                        <span class="sep">-</span>
                                                        <span class="price">$240.00</span>
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
    </main>

    <!--== Start Footer Area Wrapper ==-->
<div class="clear"></div>
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
            <a class="btn-theme" data-margin-bottom="10" href="shop-cart.html">View cart</a>
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
                                    <li><a href="shop-cart.html">Shopping Cart</a></li>
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