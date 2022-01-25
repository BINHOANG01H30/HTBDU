<?php
session_start();
$id=$_GET['item'];
if(isset($_SESSION['htb_don_hang'][$id]))
{
	$qty = $_SESSION['htb_don_hang'][$id] + 1;
}
else
{
	$qty=1;
}
$_SESSION['htb_don_hang'][$id]=$qty;
header("Location: .?action=cart");
exit();
?>