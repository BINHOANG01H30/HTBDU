<?php

session_start();
$cart = $_SESSION['htb_don_hang'];
$id = $_GET['item'];
if ($id == 0) {
    unset($_SESSION['htb_don_hang']);
    header("Location: .?action=home");
} else {
    unset($_SESSION['htb_don_hang'][$id]);
    header("Location: .?action=cart");
}
exit();
?>