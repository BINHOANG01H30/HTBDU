<?php

//Get categories
function get_cart($id) { 
    global $db;
    $query = "SELECT * FROM htb_don_hang where id = '$id'";
    $result = $db->query($query); 
    return $result;
}

function get_cart_all() { 
    global $db;
    $query = 'SELECT * FROM htb_don_hang ';
    $result = $db->query($query); 
    return $result;
}

function get_ten_kh_invoice($id) {  
    global $db;
    $query = "SELECT * FROM htb_khoahoc where id = '$id'";
    $khoahoc = $db->query($query);
    $khoahoc = $khoahoc->fetch();
    $khoahoc_name = $khoahoc['name_course'];
    return $khoahoc_name;
}

function get_tomtat_kh_invoice($id) {  
    global $db;
    $query = "SELECT * FROM htb_khoahoc where id = '$id'";
    $khoahoc = $db->query($query);
    $khoahoc = $khoahoc->fetch();
    $khoahoc_tomtat = $khoahoc['mo_ta_chi_tiet'];
    return $khoahoc_tomtat;
}

function get_ma_kh_invoice($id) {  
    global $db;
    $query = "SELECT * FROM htb_khoahoc where id = '$id'";
    $khoahoc = $db->query($query);
    $khoahoc = $khoahoc->fetch();
    $khoahoc_tomtat = $khoahoc['id'];
    return $khoahoc_tomtat;
}



function them_cart($email, $date, $user_id, $chitiet, $thanhtien, $trangthai) {
    global $db;
    $query = "INSERT INTO `htb_don_hang` (`id`, `SDT_email`, `ngay_mua`, `user_id`, `chi_tiet`, `thanh_tien`, `trang_thai`) 
    VALUES (NULL, '$email', '$date', '$user_id', '$chitiet', '$thanhtien', '$trangthai')";
    $db->exec($query);
}
function delete_cart($id) {
    global $db;
    $query = "DELETE FROM htb_don_hang WHERE id = '$id'";
    $db->exec($query);
}
function up_cart($email, $date, $user_id, $chitiet, $thanhtien, $trangtai, $order_id){
    global $db;
    $query = "UPDATE `htb_don_hang` SET `SDT_email` = '$email', `ngay_mua` = '$date', `user_id` = '$user_id', 
                    `chi_tiet` = '$chitiet', `thanh_tien` = '$thanhtien', `trang_thai` = '$trangtai'  WHERE `htb_don_hang`.`id` = '$order_id'";
    $db->exec($query);
}
?>