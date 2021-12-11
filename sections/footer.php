<?php
$footer_posts = get_posts(3);
?>
<!-- Footer Section start here -->
<footer class="footer-area">
    <!--== Start Footer Main ==-->
    <div class="footer-main">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <!--== Start widget Item ==-->
                    <div class="widget-item">
                        <div class="about-widget-wrap">
                            <div class="widget-logo-area">
                                <a href="index.php">
                                    <img class="logo-main" src="assets/img/logo.png" width="131" height="34" alt="Logo" />
                                </a>
                            </div>
                            <p class="desc">فروشگاه دیجیتال شاپ یکی از اولین فروشگاه های اینترنی در ایران در حوزه فروش موبایل و لپ تاپ</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
                                <a href="https://dribbble.com/" target="_blank" rel="noopener"><i class="fa fa-dribbble"></i></a>
                                <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
                                <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--== End widget Item ==-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <!--== Start widget Item ==-->
                    <div class="widget-item widget-services-item">
                        <h4 class="widget-title">محصولات</h4>
                        <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-1">Services</h4>
                        <div id="widgetId-1" class="collapse widget-collapse-body">
                            <div class="collapse-body">
                                <div class="widget-menu-wrap">
                                    <ul class="nav-menu">
                                        <li><a href="#">تلفن همراه</a></li>
                                        <li><a href="#">لپ تاپ</a></li>
                                        <li><a href="#">لوازم جانبی</a></li>
                                        <li><a href="#">قطعات کامپیوتر</a></li>
                                        <li><a href="#">موبایل های کترپیلار</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== End widget Item ==-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <!--== Start widget Item ==-->
                    <div class="widget-item widget-account-item">
                        <h4 class="widget-title">لینک ها</h4>
                        <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-2">My Account</h4>
                        <div id="widgetId-2" class="collapse widget-collapse-body">
                            <div class="collapse-body">
                                <div class="widget-menu-wrap">
                                    <ul class="nav-menu">
                                        <li><a href="<?php echo PATH; ?>/users/login.php">حساب کاربری</a></li>
                                        <li><a href="<?php echo PATH; ?>/contact.php">تماس با ما</a></li>
                                        <li><a href="<?php echo PATH; ?>/cart.php">سبد خرید</a></li>
                                        <li><a href="<?php echo PATH; ?>/shop.php">محصولات</a></li>
                                        <li><a href="<?php echo PATH; ?>/users/login.php">ورود/ ثبت نام</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== End widget Item ==-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <!--== Start widget Item ==-->
                    <div class="widget-item">
                        <h4 class="widget-title">آدرس دیجیتال شاپ</h4>
                        <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-3">Contact Info</h4>
                        <div id="widgetId-3" class="collapse widget-collapse-body">
                            <div class="collapse-body">
                                <div class="widget-contact-wrap">
                                    <ul>
                                        <li><span>تهران،</span> خ ولیعصر، بالاتر از پارک ساعی، نبش کوچه 18، پلاک 28، واحد 2</li>
                                        <li><span>تلفن:</span> <a href="tel://02166388810">02166388810</a></li>
                                        <li><span>ایمیل:</span> <a href="mailto://info@digital-shop.com">info@digital-shop.com</a></li>
                                        <li><span>واتساپ:</span> <a href="tel://09354608896">09354608896</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== End widget Item ==-->
                </div>
            </div>
        </div>
    </div>
    <!--== End Footer Main ==-->

    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <p class="copyright">© 2021 دیجیتال شاپ (طراحی با <i class="fa fa-heart"></i> توسط <a target="_blank" href="https://es92.ir">اسماعیل علی حسینی)</a></p>
                </div>
<!--                <div class="col-md-5 col-lg-6">-->
<!--                    <div class="payment">-->
<!--                        <a href="account-login.html"><img src="assets/img/photos/payment-card.webp" width="192" height="21" alt="Payment Logo"></a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <!--== End Footer Bottom ==-->
</footer>
<!-- Footer Section end here -->


<!-- scrollToTop start here -->
<a href="#" class="scrollToTop"><i class="icofont-bubble-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
<!-- scrollToTop ending here -->

<script>
    $(document).ready(function(){
        $('#subscribeBtn').on('click', function(){
            // Remove previous status message
            $('.status').html('');

            // Email and name regex
            var regEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;

            // Get input values
            var name = $('#name').val();
            var email = $('#email').val();

            // Validate input fields
            if(name.trim() == '' ){
                alert('Please enter your name.');
                $('#name').focus();
                return false;
            }else if (!regName.test(name)){
                alert('Please enter a valid name (first & last name).');
                $('#name').focus();
                return false;
            }else if(email.trim() == '' ){
                alert('Please enter your email.');
                $('#email').focus();
                return false;
            }else if(email.trim() != '' && !regEmail.test(email)){
                alert('Please enter a valid email.');
                $('#email').focus();
                return false;
            }else{
                // Post subscription form via Ajax
                $.ajax({
                    type:'POST',
                    url:'subscription.php',
                    dataType: "json",
                    data:{subscribe:1,name:name,email:email},
                    beforeSend: function () {
                        $('#subscribeBtn').attr("disabled", "disabled");
                        $('.content-frm').css('opacity', '.5');
                    },
                    success:function(data){
                        if(data.status == 'ok'){
                            $('#subsFrm')[0].reset();
                            $('.status').html('<p class="success">'+data.msg+'</p>');
                        }else{
                            $('.status').html('<p class="error">'+data.msg+'</p>');
                        }
                        $('#subscribeBtn').removeAttr("disabled");
                        $('.content-frm').css('opacity', '');
                    }
                });
            }
        });
    });
</script>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/fontawesome.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/circularProgressBar.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/lightcase.js"></script>
<script src="assets/js/functions.js"></script>



