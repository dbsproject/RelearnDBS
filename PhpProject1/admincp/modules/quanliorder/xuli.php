<?php

include ('../config.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$member_name = $_POST['member_name'];
$tongtien = $_POST['tongtien'];
$ngaytao = $_POST['ngaytao'];
$ngayxuat = $_POST['ngayxuat'];
$tinhtrang = $_POST['tinhtrang'];

if (isset($_POST['add_order'])) {
    $sql = "INSERT INTO `order`(`order_id`, `member_name`, `ngayxuat`, `tongtien`, `tinhtrang`, `ngaytao`) VALUES('$member_name','$tongtien','$ngaytao), '$ngayxuat', '$tinhtrang'";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanliorder&ac=add');
} elseif ($_POST['edit_order']) {
    $sql = "UPDATE `order` SET `order_id`='$order_id', member_name='$member_name', tongtien='$tongtien',ngaytao='$ngaytao', ngayxuat='$ngayxuat', tinhtrang='$tinhtrang' where order_id = '$id'";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanliorder&ac=edit&id=' . $id);
} else {
    $sql = "DELETE FROM `order` WHERE order_id ='$id' ";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanliorder&ac=add');
}
?>