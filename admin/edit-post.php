<?php require_once '../inc/config.php' ?>
<?php
if (!is_admin_login()) {
    redirect("login.php");
}

$post_cats = get_post_cats();
$post_id = $_GET['edit-post-id'];
$get_post = get_post_by_id($post_id);
$post = mysqli_fetch_array($get_post);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ویرایش: <?php echo $post['post_title'] ?></title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<div id="main">
    <h1 class="title">ویرایش: <?php echo $post['post_title'] ?></h1>
    <div class="sidebar">
        <ul>
            <li><a href="products.php">مشاهده فروشگاه</a></li>
            <li><a href="products.php">لیست محصولات</a></li>
            <li><a href="add-product.php">افزودن محصول</a></li>
            <li><a href="users.php">لیست کاربران</a></li>
            <li><a href="cats.php">دسته‌بندی‌ها</a></li>
            <li><a href="comments.php">نظرات</a></li>
            <li><a href="orders.php">سفارشات</a></li>
            <li><a href="?admin-logout=1">خروج</a></li>
        </ul>
    </div>
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
        <form action="edit-post.php?edit-post-id=<?php echo $post['id'] ?>" method="post" enctype="multipart/form-data">
            <input type="text" name="post-title" placeholder="نام نوشته" value="<?php echo $post['post_title'] ?>"><br>
            <input type="hidden" name="post-id" value="<?php echo $post['id'] ?>">

            <span style="font-size: 11px;margin-right: 5px">دسته‌بندی نوشته: <?php echo $post['post_cat'] ?></span>
            <br>
            <select name="post-cat">
                <option value="<?php echo $post['post_cat'] ?>"><?php echo $post['post_cat'] ?></option>
                <?php while ($post_cat = mysqli_fetch_array($post_cats)) { ?>
                    <option value="<?php echo $post_cat['posts_cat_name'] ?>"><?php echo $post_cat['posts_cat_name'] ?></option>
                <?php } ?>
            </select>
            <br>
            <img src="../assets/images/post/<?php echo $post['post_image'] ?>" alt="<?php echo $post['post_title'] ?>" width="120" style="margin-right: 5px"><br>
            <span style="font-size: 11px;margin-right: 5px">عکس نوشته:</span>
            <input type="file" name="new-post-image">
            <input type="hidden" name="post-image" value="<?php echo $post['post_image'] ?>">
            <br>
            <span style="font-size: 11px;margin-right: 5px">وضعیت محصول: <?php echo $post['post_visibility'] ?></span>
            <br>
            <select name="post-visibility">
                <option value="<?php echo $post['post_visibility'] ?>"><?php echo $post['post_visibility'] ?></option>
<!--                                --><?php //while ($cat = mysqli_fetch_array($cats)) { ?>
<!--                                    <option value="--><?php //echo $cat['cat_name'] ?><!--">--><?php //echo $cat['cat_name'] ?><!--</option>-->
<!--                                --><?php //} ?>
                <option value="active" >فعال</option>
                <option value="not active" >غیرفعال</option>

            </select>

            <textarea name="post-desc" placeholder="توضیحات نوشته"><?php echo $post['post_desc'] ?></textarea><br>

            <input type="submit" name="update-post" value="بروزرسانی نوشته">
        </form>
    </div>
</div>
</body>
</html>





