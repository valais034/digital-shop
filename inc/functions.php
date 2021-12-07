<?php
require_once 'config.php';


function register_user($username, $email, $password, $hash){
    global $db;
    $query = mysqli_query($db, "INSERT INTO users (display_name, email, password, hash) VALUES ('$username', '$email', '$password','$hash')");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function login($email, $password){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    if (mysqli_num_rows($query) == 1) {
        return true;
    } else {
        return false;
    }

}

function is_login(){
    if (isset($_SESSION['user-email'])) {
        return true;
    } else {
        return false;
    }
}

function redirect($url){
    header("Location: " . $url);
}


function logout(){
    unset($_SESSION['user-email']);
}

function get_userdata(){
    global $db;
    $email = $_SESSION['user-email'];
    $query = mysqli_query($db, "SELECT * FROM users WHERE email='$email'");
    return mysqli_fetch_array($query);
}


function admin_login($username, $password){
    if ($username == ADMIN_USERNAME && $password == ADMIN_PASSWORD) {
        return true;
    } else {
        return false;
    }
}

function is_admin_login(){
    if (isset($_SESSION['admin-login'])) {
        return true;
    } else {
        return false;
    }
}

function admin_logout(){
    unset($_SESSION['admin-login']);
}


function add_product($product_name, $product_price, $product_cat, $product_off_price, $product_serial, $product_num_in_stock, $product_visibility, $product_desc, $image_name, $image_tmp){
    global $db;

    move_uploaded_file($image_tmp, '../assets/images/product/' . $image_name);

    $query = mysqli_query($db, "INSERT INTO products (product_name, product_price, product_cat, product_off_price, product_serial, product_num_in_stock, product_visibility, product_desc, product_image) VALUES ('$product_name','$product_price', '$product_cat','$product_off_price', '$product_serial', '$product_num_in_stock', '$product_visibility', '$product_desc', '$image_name')");
    if ($query) {
        return true;
    } else {
        return false;
    }


}

function add_post($post_title, $post_cat, $post_visibility, $post_desc, $post_image_name, $post_image_tmp){
    global $db;

    move_uploaded_file($post_image_tmp, '../assets/images/post/' . $post_image_name);

    $query = mysqli_query($db, "INSERT INTO posts (post_title, post_cat, post_visibility, post_desc, post_image) VALUES ('$post_title', '$post_cat', '$post_visibility', '$post_desc', '$post_image_name')");
    if ($query) {
        return true;
    } else {
        return false;
    }


}



function get_products($limit = 0){
    global $db;
    if ($limit == 0) {
        $query = mysqli_query($db, "SELECT * FROM products ORDER BY id DESC");
    } else {
        $query = mysqli_query($db, "SELECT * FROM products ORDER BY id DESC LIMIT $limit");
    }
    return $query;
}


function get_posts($limit = 0){
    global $db;
    if ($limit == 0) {
        $query = mysqli_query($db, "SELECT * FROM posts ORDER BY id DESC");
    } else {
        $query = mysqli_query($db, "SELECT * FROM posts ORDER BY id DESC LIMIT $limit");
    }
    return $query;
}


function delete_product($product_id){
    global $db;
    $query = mysqli_query($db, "DELETE FROM products WHERE id='$product_id'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function delete_post($post_id){
    global $db;
    $query = mysqli_query($db, "DELETE FROM posts WHERE id='$post_id'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function add_cat($cat_name){
    global $db;
    $query = mysqli_query($db, "INSERT INTO product_cats (cat_name) VALUES ('$cat_name')");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function add_post_cat($post_cat_name){
    global $db;
    $query = mysqli_query($db, "INSERT INTO post_cats (posts_cat_name) VALUES ('$post_cat_name')");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function get_cats(){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM product_cats ORDER BY id DESC");
    return $query;
}

function get_post_cats(){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM post_cats ORDER BY id DESC");
    return $query;
}


function delete_cat($cat_id){
    global $db;
    $query = mysqli_query($db, "DELETE FROM product_cats WHERE id='$cat_id'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function delete_post_cat($post_cat_id){
    global $db;
    $query = mysqli_query($db, "DELETE FROM post_cats WHERE id='$post_cat_id'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function get_users(){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM users ORDER BY id DESC");
    return $query;
}

function delete_user($user_id){
    global $db;
    $query = mysqli_query($db, "DELETE FROM users WHERE id='$user_id'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}


function add_comment($username, $email, $comment_text, $product_id){
    global $db;
    $query = mysqli_query($db, "INSERT INTO comments (username, user_email, comment_text, product_id) VALUES ('$username','$email','$comment_text','$product_id')");
    if ($query) {
        return true;
    } else {
        return false;
    }

}


function get_comments_by_product_id($product_id){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM comments WHERE product_id='$product_id' AND is_approved='1' ORDER BY id ASC");
    return $query;

}


function get_comments(){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM comments WHERE is_approved='0'");
    return $query;
}


function approve_commnet($comment_id){
    global $db;
    $query = mysqli_query($db, "UPDATE comments SET is_approved='1' WHERE id='$comment_id'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function delete_comment($comment_id){
    global $db;
    $query = mysqli_query($db, "DELETE FROM comments WHERE id='$comment_id'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}


function add_answer($answer, $comment_id){
    global $db;
    $query = mysqli_query($db, "UPDATE comments SET  comment_answer='$answer', is_approved='1' WHERE id='$comment_id'");
    return $query;
}


function update_product($product_name, $product_price, $product_cat, $product_off_price, $product_serial, $product_num_in_stock, $product_visibility, $product_desc, $product_id, $product_image, $image_tmp = null){
    global $db;
    if (!isset($image_tmp)) {
        $query = mysqli_query($db, "UPDATE products set product_name='$product_name', product_price='$product_price', product_num_in_stock='$product_num_in_stock', product_serial='$product_serial', product_cat='$product_cat',product_off_price='$product_off_price', product_visibility='$product_visibility', product_desc='$product_desc', product_image='$product_image' WHERE id='$product_id'");
    } else {
        move_uploaded_file($image_tmp, '../assets/images/product/' . $product_image);
        $query = mysqli_query($db, "UPDATE products set product_name='$product_name', product_price='$product_price', product_num_in_stock='$product_num_in_stock', product_serial='$product_serial', product_cat='$product_cat',product_off_price='$product_off_price', product_visibility='$product_visibility', product_desc='$product_desc', product_image='$product_image' WHERE id='$product_id'");
    }

    if ($query) {
        return true;
    } else {
        return false;
    }

}

function update_post($post_title, $post_cat, $post_visibility, $post_desc, $post_id, $post_image, $post_image_tmp = null){
    global $db;
    if (!isset($post_image_tmp)) {
        $query = mysqli_query($db, "UPDATE posts set post_title='$post_title', post_cat='$post_cat', post_visibility='$post_visibility', post_desc='$post_desc', post_image='$post_image' WHERE id='$post_id'");
    } else {
        move_uploaded_file($post_image_tmp, '../assets/images/post/' . $post_image);
        $query = mysqli_query($db, "UPDATE posts set post_title='$post_title', post_cat='$post_cat', post_visibility='$post_visibility', post_desc='$post_desc', post_image='$post_image' WHERE id='$post_id'");
    }

    if ($query) {
        return true;
    } else {
        return false;
    }

}


function update_profile($display_name, $user_address, $user_number, $user_email, $user_image, $image_tmp = null){
    global $db;

    if (!isset($image_tmp)) {

        $query = mysqli_query($db, "UPDATE users SET display_name='$display_name', user_address='$user_address', user_number='$user_number', user_image='$user_image' WHERE email='$user_email'");

    } else {
        move_uploaded_file($image_tmp, '../assets/images/profile/' . $user_image);
        $query = mysqli_query($db, "UPDATE users SET display_name='$display_name', user_address='$user_address', user_number='$user_number', user_image='$user_image' WHERE email='$user_email'");

    }
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function add_to_cart($ip_address, $product_id){
    global $db;
    $ip = $_SERVER['REMOTE_ADDR'];
    $check = mysqli_query($db, "SELECT * FROM cart WHERE product_id='$product_id' AND ip_address='$ip'");
    if (mysqli_num_rows($check) > 0) {
        return true;
    }

    $query = mysqli_query($db, "INSERT INTO cart (ip_address,product_id) VALUES ('$ip_address', '$product_id')");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function get_product_by_id($product_id, $is_array = false){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM products WHERE id=$product_id");

    if ($is_array == true) {
        return mysqli_fetch_array($query);
    } else {
        return $query;

    }
}

function get_post_by_id($post_id, $is_array = false){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM posts WHERE id=$post_id");

    if ($is_array == true) {
        return mysqli_fetch_array($query);
    } else {
        return $query;

    }
}

function get_cart_items(){
    $ip_address = $_SERVER['REMOTE_ADDR'];
    global $db;
    $query = mysqli_query($db, "SELECT * FROM cart WHERE ip_address='$ip_address'");

    $product_ids = array();
    while ($row = mysqli_fetch_array($query)) {
        $product_ids[] = $row['product_id'];
    }

    $products = array();
    foreach ($product_ids as $product_id) {
        $products[] = get_product_by_id($product_id, true);
    }

    return $products;
}


function cart_total(){
    $cart_total = 0;
    $cart_items = get_cart_items();
    foreach ($cart_items as $cart_item) {
        $cart_total += $cart_item['product_price'];
    }
    return $cart_total;
}


function delete_from_cart($product_id){
    $ip_address = $_SERVER['REMOTE_ADDR'];
    global $db;
    $query = mysqli_query($db, "DELETE FROM cart WHERE ip_address='$ip_address' AND product_id='$product_id'");

    if ($query) {
        return true;
    } else {
        return false;
    }
}


function get_user_orders(){
    $email = $_SESSION['user-email'];
    global $db;
    $query = mysqli_query($db, "SELECT * FROM orders WHERE user_email='$email'");
    $orders = array();
    while ($row = mysqli_fetch_array($query)) {
        $orders[] = $row;
    }
    return $orders;
}


function get_order_items($order_id){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM orders WHERE order_id='$order_id'");

    while ($row = mysqli_fetch_array($query)) {
        $items = explode(',', $row['product_id'], -1);
    }

    $products = array();
    foreach ($items as $item) {
        $products[] = get_product_by_id($item, true);
    }

    return $products;


}


function get_orders(){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM orders ORDER BY id DESC");
    $orders = array();
    while ($row = mysqli_fetch_array($query)) {
        $orders[] = $row;
    }
    return $orders;
}


function submit_order($email, $product_ids){
    $order_id = 'adisport'. time();
    global $db ;
    $query = mysqli_query($db, "insert into orders (order_id, product_id, user_email) values ('$order_id', '$product_ids', '$email')");
}
function pay($amount, $email, $mobile, $product_ids) {

    $data = array("merchant_id" => "1be98c62-9918-4a9c-86b6-a2e470229967",
        "amount" => 1000,
        "callback_url" => "http://localhost/adidassport/verify.php",
        "description" => "خرید از فروشگاه آدیداس اسپرت",
        "metadata" => [ "email" => "info@email.com","mobile"=>"09121234567"],
    );
    $jsonData = json_encode($data);
    $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
    curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($jsonData)
    ));

    $result = curl_exec($ch);
    $err = curl_error($ch);
    $result = json_decode($result, true, JSON_PRETTY_PRINT);
    curl_close($ch);



    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        if (empty($result['errors'])) {
            if ($result['data']['code'] == 100) {
                $order_id = 'adisportonline'. time();
                $authority = ['Authority'=>$result["Authority"]];
//                $authority = $result->Authority;
                global $db ;
                $query = mysqli_query($db, "insert into orders (order_id, order_total, product_id, user_email, authority) values ('$order_id','$amount', '$product_ids', '$email','$authority')");
                header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
            }
        } else {
            echo'Error Code: ' . $result['errors']['code'];
            echo'message: ' .  $result['errors']['message'];
        }
    }
}

function get_order_by_authority($auhtority){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM orders WHERE authority='$auhtority'");
    return mysqli_fetch_array($query);
}

function final_pay($authority, $ref_id){
    global $db;
    $query = mysqli_query($db, "UPDATE orders SET is_paid='1', ref_id='$ref_id' WHERE authority='$authority'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function clear_cart(){
    global $db;
    $ip = $_SERVER['REMOTE_ADDR'];
    $query = mysqli_query($db, "DELETE FROM cart WHERE ip_address='$ip'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}


function check_user($email){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($query) == 1) {
        return true;
    } else {
        return false;
    }
}

function reset_password($password, $email, $hash){
    global $db;
    $query = mysqli_query($db, "UPDATE users SET password='$password' WHERE email='$email' AND hash='$hash'");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function send_email($email){
    global $db;
    $query = mysqli_query($db, "SELECT * FROM users WHERE email='$email'");
    $fetch = mysqli_fetch_array($query);
    $user_hash = $fetch['hash'];
    $to = $email;
    $subject = "لینک بازیابی کلمه عبور زنبیل";
    $txt = "برای بازیابی کلمه‌ی عبور خود، روی لینک زیر کلیک کنید:";
    $txt .= "<br>" . "<a href='http://es92.ir/adidassport/users/reset.php?email=" . $email . "&hash=" . $user_hash . "'>بازیابی کلمه عبور</a>";
    $headers = "From: info@xanbil.com";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    if (mail($to, $subject, $txt, $headers)) {
        return true;
    } else {
        return false;
    }
}