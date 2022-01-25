<?php 
function them_admin($user, $email, $pass){
    global $db;
    $query = "INSERT INTO htb_user (username, email, password_hash, position)"
            . "VALUES ('$user', '$email', '$pass', '2')";
    $db->exec($query);
}
function get_user() {
    global $db;
    $query = "SELECT * FROM htb_user ORDER BY position";
    $username = $db->query($query);
    return $username;
}
function get_id_user($username) {
    global $db;
    $query = "SELECT * FROM htb_user WHERE username = '$username'";
    $user = $db->query($query);
    $user = $user->fetch();
    $user_name = $user['id'];
    return $user_name;
}
function delete_user($id) {
    global $db;
    $query = "DELETE FROM htb_user WHERE htb_user.id = '$id'";
    $db->exec($query);
}
function get_user_theo_loai($id) {
    global $db;
    $query = "SELECT * FROM htb_user WHERE position = " . $id;
    $product = $db->query($query);
    return $product;
}
function get_loai_user($id) {
    global $db;
    $query = "SELECT * FROM htb_user WHERE position = $id";
    $user = $db->query($query);
    $user = $user->fetch();
    $user_name = $user['position'];
    return $user_name;
}
function get_ten_user($user_id) {
    global $db;
    $query = "SELECT * FROM htb_user WHERE id = $user_id";
    $user = $db->query($query);
    $user = $user->fetch();
    $user_name = $user['username'];
    return $user_name;
}

function get_user_theo_id($user_id) {
    global $db;
    $query = "SELECT * FROM htb_user WHERE id = $user_id";
    $user = $db->query($query);
    return $user;
}

function get_email_user($user_id) {
    global $db;
    $query = "SELECT * FROM htb_user WHERE id = $user_id";
    $user = $db->query($query);
    $user = $user->fetch();
    $user_name = $user['email'];
    return $user_name;
}
function get_soluong_user($id) {
    global $db;
    $query = "SELECT count(*) from htb_user WHERE htb_user.position = '$id'";
    $product = $db->query($query);
    foreach ($product as $count) {
        echo $count['count(*)'];
    }
    return $product;
}
 ?>