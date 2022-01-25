<?php
function get_sanpham_theo_nhomsp($category_id, $page, $per_page) {
    global $db;
    $offset = ($page - 1) * $per_page;
    $query = "SELECT * FROM htb_khoahoc  WHERE htb_khoahoc.id_danhmuc = '$category_id'  ORDER BY id ASC LIMIT $per_page OFFSET ". $offset ;
    $products = $db->query($query);
    return $products;
}

function get_sanpham_theo_nhomsp_admin($category_id) { 
    global $db;
    $query = "SELECT * FROM htb_khoahoc  WHERE htb_khoahoc.id_danhmuc = '$category_id'  ORDER BY id ";
    $products = $db->query($query);
    return $products;
}

// THỐNG KÊ

function get_soluong_sanpham($category_id) {
    global $db;
    $query = "SELECT count(*) from htb_khoahoc WHERE htb_khoahoc.id_danhmuc = '$category_id'";
    $product = $db->query($query);
    foreach ($product as $count) {
        echo $count['count(*)'];
    }
    return $product;
}

function get_soluong_sanpham_all() {
    global $db;
    $query = "SELECT count(*)  from htb_khoahoc";
    $product = $db->query($query);
    foreach ($product as $count) {
        echo $count['count(*)'];
    }
    return $product;
}
 
function get_soluong_sanpham_da_ban() {
    global $db;
    $daban = "Đã thanh toán";
    $query = "SELECT count(*) from htb_don_hang WHERE  htb_don_hang.trang_thai = '$daban'";
    $product = $db->query($query);
    foreach ($product as $count) {
        echo $count['count(*)'];
    }
    return $product;
}

function get_soluong_danhmuc() {
    global $db;
    $query = "SELECT count(*) from htb_danhmuc";
    $product = $db->query($query);
    foreach ($product as $count) {
        echo $count['count(*)'];
    }
    return $product;
}

function get_soluong_gv() { 
    global $db;
    $query = "SELECT count(*) from htb_giaovien";
    $product = $db->query($query);
    foreach ($product as $count) {
        echo $count['count(*)'];
    }
    return $product;
}



function get_VND($khoahoc_id) {
    global $db;
    $query = "SELECT * FROM htb_khoahoc WHERE id = $khoahoc_id;";
    $khoahoc = $db->query($query);
    $khoahoc = $khoahoc->fetch();
    $tranfer = 22952;
    $gia_kh = $khoahoc['gia_canh_tranh'];
    return $gia_kh;
}


function get_gv_fr_kh($gv_id) {
    global $db;
    $query = "SELECT htb_giaovien.name_gv FROM htb_khoahoc, htb_giaovien WHERE htb_khoahoc.giao_vien_id = htb_giaovien.id and htb_khoahoc.giao_vien_id = '$gv_id'";
    $product = $db->query($query);
    return $product;
}

function get_sanpham_3_new() {
    global $db;
    $query = "SELECT * FROM htb_khoahoc WHERE khoa_hoc_moi = 1 ORDER BY id DESC LIMIT 3";
    $product = $db->query($query);  
    return $product;
}

function get_sanpham_6_new() {
    global $db;
    $query = "SELECT * FROM htb_khoahoc ORDER BY id DESC LIMIT 6";
    $product = $db->query($query);
    return $product;
}

function get_sanpham_12_new() {
    global $db;
    $query = "SELECT * FROM htb_khoahoc ORDER BY id DESC LIMIT 12";
    $product = $db->query($query);
    return $product;
}

function get_sanpham_theo_sl($page, $per_page) {
    global $db;
    $offset = ($page - 1) * $per_page;
    $query = "SELECT * FROM htb_khoahoc ORDER BY id ASC LIMIT $per_page OFFSET ". $offset ;
    $product = $db->query($query);
    return $product;
}


function get_sanpham_all() {
    global $db;
    $query = "SELECT * FROM htb_khoahoc ORDER BY id" ;
    $product = $db->query($query);
    return $product;
}

function get_sanpham($id_sanpham) {
    global $db;
    $query = "SELECT * FROM htb_khoahoc WHERE id = " . $id_sanpham;
    $product = $db->query($query);
    $product = $product->fetch();
    return $product;
}

function get_sanpham_theo_code($code) {
    global $db;
    $query = "SELECT * FROM htb_khoahoc WHERE code = '$code'";
    $product = $db->query($query);
    return $product;
}

function tim_kiem_sp($tukhoa) {
    global $db;
    $query = "SELECT * FROM htb_khoahoc WHERE name_course like '%$tukhoa%' ORDER BY id DESC LIMIT 6";
    $product = $db->query($query);
    return $product;
}

function delete_sanpham($id_sanpham) {
    global $db;
    $query = "DELETE FROM htb_khoahoc WHERE id = '$id_sanpham'";
    $db->exec($query);
}

function add_sanpham($category, $name, $code, $tomtat, $mota, $thinhhanh, $noibat, $moi, $gia, $giagiam, $hinhanh) {
    global $db;
    $query = "INSERT INTO htb_khoahoc (id_danhmuc, name_course, code, mo_ta_ngan_gon, mo_ta_chi_tiet, khoa_hoc_thinh_hanh, khoa_hoc_noi_bat, khoa_hoc_moi, gia_khoa_hoc, gia_canh_tranh, hinh_anh) " 
            . "VALUES ('$category', '$name', '$code', '$tomtat', '$mota', '$thinhhanh', '$noibat' ,'$moi', '$gia', '$giagiam', '$hinhanh')";
    $db->exec($query);
}
function sua_sp($category_id, $name, $code, $tomtat, $mota, $thinhhanh, $noibat, $moi, $gia, $giagiam, $hinhanh, $idkh){
    global $db;
    $query = "UPDATE htb_khoahoc INNER JOIN htb_danhmuc on htb_khoahoc.id_danhmuc = htb_danhmuc.id
            SET id_danhmuc = '" .$category_id. "', name_course ='" .$name. "', code = '".$code."', mo_ta_ngan_gon = '".$tomtat."', mo_ta_chi_tiet = '".$mota."', khoa_hoc_thinh_hanh = '".$thinhhanh."', khoa_hoc_noi_bat = '".$noibat."', khoa_hoc_moi = '".$moi."', gia_khoa_hoc = '".$gia."', gia_canh_tranh = '".$giagiam."', hinh_anh = '".$hinhanh."'
                 WHERE htb_khoahoc.id = '$idkh'";
    $db->exec($query); 
}
function get_hinh_sp(){
    $path= getcwd();
    $img_path = dirname($path).'/images/course';
    $items= scandir($img_path);
    $files= array();
    foreach ($items as $item){
        $item_path= $img_path.DIRECTORY_SEPARATOR.$item;
        if(is_file($item_path)){
        $files[]= $item;}
        }
    return $files;
}
