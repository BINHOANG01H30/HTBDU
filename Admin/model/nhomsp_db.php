<?php

//Get categories
function get_nhomsp() {
    global $db;
    $query = 'SELECT * FROM htb_danhmuc';
    $result = $db->query($query);
    return $result;
}

//Get categories name
function get_ten_nhomsp_theo_id($category_id) {
    global $db;
    $query = "SELECT * FROM htb_danhmuc WHERE id = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['name'];
    return $category_name;
}

function get_ten_nhomsp() {
    global $db;
    $query = 'SELECT * FROM htb_danhmuc';
    $result = $db->query($query);
    return $result;
}

function get_hinh_nhomsp($category_id) {
    global $db;
    $query = "SELECT * FROM htb_danhmuc WHERE id = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['ctg_img'];
    return $category_name;
}
function delete_nhomsp($category_id) {
    global $db;
    $query = "DELETE FROM htb_danhmuc WHERE id = '$category_id'";
    $db->exec($query);
}

function them_nhomsp($ten_nhomsp, $hinh_nhomsp) {
    global $db;
    $query = "INSERT INTO `htb_danhmuc` (`id`, `name`, `ctg_img`) VALUES (NULL, '$ten_nhomsp', '$hinh_nhomsp');";
    $db->exec($query);
}
function sua_nhomsp($ten_nhomsp, $hinh_nhomsp, $category_id){
    global $db;
    $query = "UPDATE `htb_danhmuc` SET `name` = '$ten_nhomsp', `ctg_img` = '$hinh_nhomsp' WHERE `htb_danhmuc`.`id` = '$category_id'";
    $db->exec($query);
}
function get_hinh_nsp(){
    $path= getcwd();
    $img_path = dirname($path).'/images/categories';
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