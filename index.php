<?php
require('Admin/model/database.php');
require('Admin/model/slider_db.php');
require('Admin/model/nhomsp_db.php');
require('Admin/model/giaovien_db.php');
require('Admin/model/sanpham_db.php');
require('Admin/model/user_db.php');
require('Admin/model/cart_db.php');

if (!isset($_SESSION)) {
    session_start();
}
$ok = 1;
$total = 0;
if (isset($_SESSION['htb_don_hang'])) {
    foreach ($_SESSION['htb_don_hang'] as $k => $v) {
        if (isset($k)) {
            $ok = 2;
        }
    }
}
if ($ok != 2) {
    $cart_info = 'Giỏ hàng: 0 khóa học';
} else {
    $items = $_SESSION['htb_don_hang'];
    $cart_info = 'Giỏ hàng: ' . count($items) . ' khóa học';
}
if (isset($_POST['action'])) {
    $action = $_POST['action']; //exam: add product
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
if ($action == 'home') {
    $categories = get_nhomsp();
    $products = get_sanpham_3_new();
    $teachers = get_giaovien();
    $sliders =     get_slider();
    $teachers_name = get_ten_giaovien_home();
    include('home.php');
} else if ($action == 'course') {
    $category_id = $_GET['id_nsp'];
    $id_sanpham = $_GET['id_sp'];
    $products = get_sanpham($id_sanpham); 
    $categories = get_ten_nhomsp_theo_id($category_id);
    $teacher = get_giaovien_all($id_sanpham);
    $teachers = get_giaovien();
    $product_new = get_sanpham_3_new();
    include('course.php');
} else if ($action == 'user') {
    $user_id = $_GET['id_user'];
    $user_name = get_ten_user($user_id);
    $user = get_user_theo_id($user_id);
} else if ($action == 'login') {
    require_once('Admin/login.php');
} else if ($action == 'courses') {
    $category_id = !empty($_GET['id_nsp']) ? $_GET['id_nsp'] : 0;
    $page_num = !empty($_GET['page']) ? $_GET['page'] : 1;
    $per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 6;
    $tukhoa =  !empty($_POST['tu_khoa']) ? $_POST['tu_khoa'] : '';
    if ($category_id == '0') {
        $breadcrumb = 'Tất cả khóa học';
        $categories = get_nhomsp();
        $products = get_sanpham_6_new();
        $teachers = get_giaovien();
        $product_new = get_sanpham_3_new();
        $product_page = get_sanpham_theo_sl($page_num, $per_page);
        $category_name = get_ten_nhomsp();
        $timkiem = tim_kiem_sp($tukhoa);
        if(isset($tukhoa)){
           $product_page = tim_kiem_sp($tukhoa);
        }
        include('courses.php');
    } else {
        $product_new = get_sanpham_3_new();
        $breadcrumb = get_ten_nhomsp_theo_id($category_id);
        $categories = get_nhomsp();
        $category_name = get_ten_nhomsp();
        $product_page = get_sanpham_theo_nhomsp($category_id, $page_num, $per_page);   
        include('courses.php');
    }
} else if ($action == 'cart') {
    $id_sanpham = !empty($_GET['id_sp']) ? $_GET['id_sp'] : 0;
    if(isset($_SESSION['username'])){
        if($id_sanpham > 0){
            $products = get_sanpham($id_sanpham);
            $giaVND = get_VND($id_sanpham);
            $teachers_name = get_giaovien_all($id_sanpham);
            include('cart.php');
        }
        else{
            echo 'Bạn chưa có phiên thanh toán nào <br>';
            echo '<a href="?action=courses&id_nsp=0"> Tới trang khóa học</a>';
        }
    }
    else{
        $_SESSION['id_sp'] = $_GET['id_sp'];
        header('location: Admin/login.php');
    }
    
} else if ($action == 'about') {
    $teachers = get_giaovien();
    include('about.php');
} else if ($action == 'blog') {
    include('blog.php');
} else if ($action == 'contact') {
    include('contact.php');
} else if ($action == 'addcart') {
    $item = $_GET['item'];
    include('addcart.php');
} else if ($action == 'delcart') {
    $item = $_GET['item'];
    include('delcart.php');
} else if ($action == 'ck') {
    include('checkout.php');
} else if ($action == 'checkout') {
    $email = $_POST['SDT_email'];
    $date = $_POST['date'];
    $user_id = $_POST['user_id'];
    $chitiet = $_POST['chitiet'];
    $thanhtien = $_POST['thanh_tien'];
    $trangtai = 'Đang chờ xử lý';
    them_cart($email, $date, $user_id, $chitiet, $thanhtien, $trangtai);
    header("Location: .?action=ck");
} else if($action == '404_error') {
    include('404_error.php');  
} else{
    $action = 'login';
}
