<?php require_once '../inc/config.php' ?>
<?php
if (!is_admin_login()) {
    redirect("login.php");
}

$post_cats = get_post_cats();
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>محیط کاربری ادمین</title>
    <!--    <link rel="stylesheet" href="../assets/css/styles.css">-->
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
    <link href="../users/dashboard.css" rel="stylesheet">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>پنل مدیریت</title>-->
<!--    <link rel="stylesheet" href="styles/styles.css">-->
<!--    <link href="styles/dashboard.css" rel="stylesheet">-->
<!--    <link href="../../users/dashboard.css" rel="stylesheet">-->
<!---->
<!--</head>-->
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

<header class="navbar navbar-dark bg-dark flex-md-nowrap p-0 shadow" >
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"  style="background: gold;color: black" href="<?php echo PATH; ?>/admin">پنل مدیریت</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <div id="sidebarMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>
            </ul>
        </div>    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="?admin-logout=1">خروج </a>
        </div>
    </div>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="<?php echo PATH; ?>" target="_blank">مشاهده وب سایت</a>
        </div>
    </div>

</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <span data-feather="home"></span>
                            داشبورد
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">
                            <span data-feather="file"></span>
                            محصولات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-product.php">
                            <span data-feather="shopping-cart"></span>
                            افزودن محصول
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">
                            <span data-feather="users"></span>
                            لیست کاربران                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cats.php">
                            <span data-feather="bar-chart-2"></span>
                            دسته بندی ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.php">
                            <span data-feather="layers"></span>
                            نظرات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <span data-feather="layers"></span>
                            سفارشات
                        </a>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>نوشته ها</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="posts.php">
                            <span data-feather="file-text"></span>
                            نوشته ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-post.php">
                            <span data-feather="file-text"></span>
                            افزودن نوشته
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post-cats.php">
                            <span data-feather="file-text"></span>
                            دسته بندی نوشته ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">افزودن نوشته</h1>

                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>


            <section class="event-gift-section padding-tb padding-b bg-image">
                <div class="content">
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
                    <form action="add-post.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="post-title" placeholder="نام نوشته"><br>

                        <span style="font-size: 11px;margin-right: 5px">دسته‌بندی نوشته:</span>
                        <select name="post-cat">
                            <option value="0">انتخاب کنید ...</option>
                            <?php while ($post_cat = mysqli_fetch_array($post_cats)) { ?>
                                <option value="<?php echo $post_cat['posts_cat_name'] ?>"><?php echo $post_cat['posts_cat_name'] ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <span style="font-size: 11px;margin-right: 5px">وضعیت نوشته:</span><select name="post-visibility">
                            <option value="active" >فعال</option>
                            <option value="not active" >غیرفعال</option>

                        </select>
                        <br>
                        <span style="font-size: 11px;margin-right: 5px">عکس نوشته:</span>
                        <input type="file" name="post-image"> <br>


                        <textarea name="post-desc" id="myTextarea"></textarea>
                        <script src='../assets/js/tinymce/tinymce.min.js'></script>
                        <script>tinymce.init({
                                selector: '#myTextarea',
                                plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                                imagetools_cors_hosts: ['picsum.photos'],
                                menubar: 'file edit view insert format tools table help',
                                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                                toolbar_sticky: true,
                                autosave_ask_before_unload: true,
                                autosave_interval: "30s",
                                autosave_prefix: "{path}{query}-{id}-",
                                autosave_restore_when_empty: false,
                                autosave_retention: "2m",
                                image_advtab: true,
                                /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
                                link_list: [
                                    { title: 'My page 1', value: 'https://www.codexworld.com' },
                                    { title: 'My page 2', value: 'https://www.xwebtools.com' }
                                ],
                                image_list: [
                                    { title: 'My page 1', value: 'https://www.codexworld.com' },
                                    { title: 'My page 2', value: 'https://www.xwebtools.com' }
                                ],
                                image_class_list: [
                                    { title: 'None', value: '' },
                                    { title: 'Some class', value: 'class-name' }
                                ],
                                importcss_append: true,
                                file_picker_callback: function (callback, value, meta) {
                                    /* Provide file and text for the link dialog */
                                    if (meta.filetype === 'file') {
                                        callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
                                    }

                                    /* Provide image and alt text for the image dialog */
                                    if (meta.filetype === 'image') {
                                        callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
                                    }

                                    /* Provide alternative source and posted for the media dialog */
                                    if (meta.filetype === 'media') {
                                        callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
                                    }
                                },
                                templates: [
                                    { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                                    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                                    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
                                ],
                                template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                                template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                                height: 600,
                                image_caption: true,
                                quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                                noneditable_noneditable_class: "mceNonEditable",
                                toolbar_mode: 'sliding',
                                contextmenu: "link image imagetools table",
                            });
                        </script>
                        <input type="submit" name="add-post" value="افزودن محصول">
                    </form>
                </div>


            </section>

        </main>
    </div>
</div>




<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/fontawesome.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/swiper.min.js"></script>
<script src="../assets/js/circularProgressBar.min.js"></script>
<script src="../assets/js/isotope.pkgd.min.js"></script>
<script src="../assets/js/lightcase.js"></script>
<script src="../assets/js/functions.js"></script>
</body>
</html>