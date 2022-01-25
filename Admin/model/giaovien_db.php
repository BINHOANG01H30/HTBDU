<?php

//Get categories
function get_giaovien() {
    global $db;
    $query = 'SELECT * FROM htb_giaovien';
    $result = $db->query($query);
    return $result;
}

//Get categories name
function get_giaovien_all($khoahoc_id) {
    global $db;
    $query = "SELECT * FROM htb_khoahoc, htb_giaovien WHERE htb_khoahoc.giao_vien_id = htb_giaovien.id and htb_khoahoc.id = $khoahoc_id;";
    $giaovien = $db->query($query);
    $giaovien = $giaovien->fetch();
    return $giaovien;
}

function get_ten_giaovien_home() {
    global $db;
    $query = "SELECT * FROM htb_khoahoc, htb_giaovien WHERE htb_khoahoc.giao_vien_id = htb_giaovien.id ";
    $giaovien = $db->query($query);
    $giaovien = $giaovien->fetch();
    $giaovien_ten = $giaovien['name_gv'];
    return $giaovien_ten;
}

function get_hinh_giaovien($teacher_id) {
    global $db;
    $query = "SELECT * FROM htb_danhmuc WHERE id = $teacher_id";
    $teachers = $db->query($query);
    $teachers = $teachers->fetch();
    $teacher_name = $teachers['avatar'];
    return $teacher_name;
}
function delete_giaovien($teacher_id) {
    global $db;
    $query = "DELETE FROM htb_danhmuc WHERE id = '$teacher_id'";
    $db->exec($query);
}

function them_giaovien($ten_giaovien, $hinh_giaovien) {
    global $db;
    $query = "INSERT INTO `htb_danhmuc` (`id`, `name`, `ctg_img`) VALUES (NULL, '$ten_giaovien', '$hinh_giaovien');";
    $db->exec($query);
}
function sua_giaovien($ten_giaovien, $hinh_giaovien, $teacher_id){
    global $db;
    $query = "UPDATE `htb_danhmuc` SET `name` = '$ten_giaovien', `ctg_img` = '$hinh_giaovien' WHERE `htb_danhmuc`.`id` = '$teacher_id'";
    $db->exec($query);
}
function get_hinh_gv(){
    $path= getcwd();
    $img_path = dirname($path).'/images/teachers';
    $items= scandir($img_path);
    $files= array();
    foreach ($items as $item){
        $item_path= $img_path.DIRECTORY_SEPARATOR.$item;
        if(is_file($item_path)){
        $files[]= $item;}
        }
    return $files;
}
?>