<?php

//Get categories
function get_slider() {
    global $db;
    $query = 'SELECT * FROM htb_slider_img';
    $result = $db->query($query);
    return $result;
}

//Get categories name
function get_ten_slider($slider_id) {
    global $db;
    $query = "SELECT * FROM htb_slider WHERE id = $slider_id";
    $slider = $db->query($query);
    $slider = $slider->fetch();
    $slider_name = $slider['name'];
    return $slider_name;
}
function get_hinh_slider($slider_id) {
    global $db;
    $query = "SELECT * FROM htb_danhmuc WHERE id = $slider_id";
    $slider = $db->query($query);
    $slider = $slider->fetch();
    $slider_name = $slider['avatar'];
    return $slider_name;
}
function delete_slider($slider_id) {
    global $db;
    $query = "DELETE FROM htb_slider_img WHERE id = '$slider_id'";
    $db->exec($query);
}

function them_slider($img_slider, $id_slider) {
    global $db;
    $query = "INSERT INTO `htb_slider_img` (`id`, `file`, `slider_id`) VALUES (NULL, '$img_slider', '$id_slider');";
    $db->exec($query);
}
function sua_slider($img_slider, $slider_id){
    global $db;
    $query = "UPDATE `htb_slider_img` SET `name` =  `file` = '$img_slider' WHERE `htb_slider_img`.`id` = '$slider_id'";
    $db->exec($query);
}
function get_hinh_sl(){
    $path= getcwd();
    $img_path = dirname($path).'/images/slider';
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