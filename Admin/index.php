<?php
require('model/database.php');
require('model/nhomsp_db.php');
require('model/sanpham_db.php');
require('model/user_db.php');
require('model/cart_db.php');
require('model/giaovien_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];//exam: add product
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
if ($action == 'home') {
    $categories = get_nhomsp();
    $categories1 = get_nhomsp();
    $users = get_user();
    include('home.php');
}
if ($action == 'ql_sp') {
    $category_id = $_GET['category_id'];
    if ($category_id == '0') {
        $categories = get_nhomsp();
        $categories2 = get_nhomsp();
        $products = get_sanpham_all();
        $category_name = 'Tất cả';
        include('ql_sp.php'); 
    }   
    else {
        $code = $_GET['code'];
        if ($code == '0'){
            $category_name = get_ten_nhomsp_theo_id($category_id);
            $categories = get_nhomsp();
            $categories2 = get_nhomsp();
            $products = get_sanpham_theo_nhomsp_admin($category_id);
            include('ql_sp.php');
        }
        else{
            $category_name = $code;
            $categories = get_nhomsp();
            $categories2 = get_nhomsp();
            $products = get_sanpham_theo_code($code);
            include('ql_sp.php');
        }
    }
} else if ($action == 'del_nhomsp') {
    $category_id = $_POST['category_id'];
    delete_nhomsp($category_id);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'del_sp') {
    $id_sanpham = $_POST['id_sanpham'];
    delete_sanpham($id_sanpham);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'them_nhomsp') {
    $ten_nhomsp = $_POST['ten_nhomsp'];
    $hinh_nhomsp = $_POST['hinh_nhomsp'];
    them_nhomsp($ten_nhomsp, $hinh_nhomsp);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'them_sp') {
    $category_id = $_POST['category_id'];
    $name = $_POST['name_course'];
    $code = $_POST['code'];
    $tomtat = $_POST['tomtat'];
    $mota = $_POST['mota'];
    $thinhhanh = $_POST['thinhhanh'];
    $noibat = $_POST['noibat'];
    $moi = $_POST['moi'];
    $gia = $_POST['gia'];
    $giagiam = $_POST['giamgia'];
    $hinhanh = $_POST['hinh_anh'];
    add_sanpham($category_id, $name, $code, $tomtat, $mota, $thinhhanh, $noibat, $moi, $gia, $giagiam, $hinhanh);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'ql_hinhanh') {
   $hinh_nsp = get_hinh_nsp();
   $hinh_sp = get_hinh_sp();
   $hinh_gv = get_hinh_gv();
   include('ql_hinhanh.php');
} else if ($action == 'del_img_nsp') { 
   $img = $_POST['id_img'];
   unlink('../images/categories/'.$img);
   $hinh_nsp = get_hinh_nsp();
   $hinh_sp = get_hinh_sp();
   $hinh_gv = get_hinh_gv();
   include('ql_hinhanh.php');
} else if ($action == 'del_img_sp') {
   $img = $_POST['id_img'];
   unlink('../images/course/'.$img);
   $hinh_nsp = get_hinh_nsp();
   $hinh_sp = get_hinh_sp();
   $hinh_gv = get_hinh_gv();
   include('ql_hinhanh.php');
}else if ($action == 'del_img_gv') {
   $img = $_POST['id_img'];
   unlink('../images/teachers/'.$img);
   $hinh_nsp = get_hinh_nsp();
   $hinh_sp = get_hinh_sp();
   $hinh_gv = get_hinh_gv();
   include('ql_hinhanh.php');
} else if ($action == 'edit_nsp'){
        $category_id = $_GET['category_id'];
        $category_name1 = get_ten_nhomsp_theo_id($category_id);
        $category_img = get_hinh_nhomsp($category_id);
        $categories = get_nhomsp();
        $categories2 = get_nhomsp(); 
        $products = get_sanpham_all();
        $category_name = 'Tất cả';
        include('sua_nhomsp.php');
} else if ($action == 'edit_sp'){
        $product_id = $_GET['product_id'];
        $products = get_sanpham($product_id);
        $categories = get_nhomsp();
        $category_name = 'Tất cả';
        include('edit_sp.php');
} else if ($action == 'sua_sp') {
    $category_id = $_POST['category_id'];
    $name = $_POST['name_course'];
    $code = $_POST['code'];
    $tomtat = $_POST['tomtat'];
    $mota = $_POST['chitiet'];
    $thinhhanh = $_POST['thinhhanh'];
    $noibat = $_POST['noibat'];
    $moi = $_POST['moi'];
    $gia = $_POST['gia'];
    $giagiam = $_POST['giamgia'];
    $hinhanh = $_POST['hinh'];
    $idkh = $_POST['product_id'];
    sua_sp($category_id, $name, $code, $tomtat, $mota, $thinhhanh, $noibat, $moi, $gia, $giagiam, $hinhanh, $idkh);
    header("Location: .?action=edit_sp&product_id=$idkh");
} else if ($action == 'sua_nhomsp') {
    $ten_nhomsp = $_POST['ten_nhomsp'];
    $hinh_nhomsp = $_POST['hinh_nhomsp'];
    $category_id = $_POST['category_id'];
    sua_nhomsp($ten_nhomsp, $hinh_nhomsp, $category_id);
    header("Location: .?action=ql_sp&category_id=0");
} else if ($action == 'ql_user') {
    $id = $_GET['id'];
    if($id =='0'){
        $users = get_user();
        $breadcrumb = 'Tất cả';
        include('ql_user.php');
    }
    else{
        $users = get_user_theo_loai($id);
        $breadcrumb = get_loai_user($id);
        if($breadcrumb == '1'){
            $breadcrumb = 'Người dùng';
        }
        else{
            $breadcrumb = 'Quản trị viên';
        }
        include('ql_user.php'); 
    }

} else if ($action == 'del_user') { 
    $id = $_POST['id'];
    delete_user($id);
    header("Location: .?action=ql_user&id=0");  
} else if ($action == 'them_admin') {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    them_admin($user, $email, $pass);
    header("Location: .?action=ql_user&id=0");
} else if ($action == 'ql_cart') {

    $id_cart = !empty($_GET['id_cart']) ? $_GET['id_cart'] : 0;
    if($id_cart==0){
        $carts = get_cart_all();
    }else{
        $carts = get_cart($id_cart); 
    }
    
    // $products = get_sanpham($id_cart); 
    include('ql_cart.php');
} else if ($action == 'del_cart') {
    $id = $_POST['id'];
    delete_cart($id);
    header("Location: .?action=ql_cart");
} else if ($action == 'up_cart') {
    $email = $_POST['email'];
    $date = $_POST['date'];
    $userid = $_POST['userid'];
    $chitiet = $_POST['chitiet'];
    $thanhtien = $_POST['thanhtien'];
    $trangthai = $_POST['trangthai'];
    $cartid = $_POST['cartid'];
    up_cart($email, $date, $userid, $chitiet, $thanhtien, $trangthai, $cartid);
    header("Location: .?action=ql_cart");
}

else if ($action == 'print_cart') {
    $email = $_POST['email'];
    $date = $_POST['date'];
    $userid = $_POST['userid'];
    $chitiet = $_POST['chitiet'];
    $thanhtien = $_POST['thanhtien'];
    $trangthai = $_POST['trangthai'];
    $cartid = $_POST['cartid'];
    up_cart($email, $date, $userid, $chitiet, $thanhtien, $trangthai, $cartid);
    header("Location: .?action=ql_cart");
}
?>