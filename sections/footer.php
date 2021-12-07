<?php
$footer_posts = get_posts(3);
?>
<!-- Footer Section start here -->
<footer class="footer-section" style="background-image: url(assets/images/bg-images/footer-bg.png);">
    <div class="footer-top">
        <div class="container">
            <div class="row g-3 justify-content-center g-lg-0">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/footer/footer-top/01.png" alt="Phone-icon">
                            </div>
                            <div class="lab-content">
                                <span>امور نمایندگی ها: 021-88680364</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/footer/footer-top/02.png" alt="email-icon">
                            </div>
                            <div class="lab-content">
                                <span>ایمیل: ads@adidasland.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="assets/images/footer/footer-top/03.png" alt="location-icon">
                            </div>
                            <div class="lab-content">
                                <span>سعادت آباد، م کاج، نبش سوم، پلاک 22</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle padding-tb">
        <div class="container">
            <div class="row shape-c">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-5 mb-lg-0">
                            <div class="fm-item-title">
                                <h5>درباره ما</h5>
                            </div>
                            <div class="fm-item-content">
                                <p class="mb-30">آدیداس برندی قدیمی، بااصالت و پرآوازه در صنف محصولات ورزشی است. نمایندگی آدیداس در تهران آماده خدمت رسانی به مشتریان عزیز می باشد.</p>
                                <img class="rounded footer-abt-img" src="assets/images/logo/01.png"
                                     alt="about-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item mb-5 mb-lg-0">
                            <div class="fm-item-title">
                                <h5>اخبار جدید</h5>
                            </div>
                            <div class="fm-item-content">
                                <?php while ($footer_post = mysqli_fetch_array($footer_posts)) { ?>
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="post.php?post-id=<?php echo $footer_post['id'] ?>"><img src="assets/images/post/<?php echo $footer_post['post_image'] ?>" alt=""></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="post.php?post-id=<?php echo $footer_post['id'] ?>"><?php echo $footer_post['post_title'] ?></a></h6>
                                                <p>14 آذر 1400</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="footer-middle-item-3 mb-5 mb-lg-0">
                            <div class="fm-item-title">
                                <h5>خبرنامه</h5>
                            </div>
                            <div class="fm-item-content">
                                <p>چنانچه میخواهید از نمایندگی ها و تغییراتشان با خبر شوید ایمیل خود را ارسال نمایید.</p>
                                <form action="#" id="subsFrm" method="post">
                                    <input type="text" id="name" placeholder="Full Name" required="">
                                    <input type="email" id="email" placeholder="E-mail" required="">
                                    <input type="button" id="subscribeBtn" class="lab-btn" value="عضویت">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-content text-center">
                        <p>@2021 طراحی و توسعه :  <a href="https://es92.ir/" target="_blank">اسماعیل علی حسینی</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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



