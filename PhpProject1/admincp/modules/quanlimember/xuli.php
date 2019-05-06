<?php

include ('../config.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$member_name = $_POST['member_name'];
$password = $_POST['password'];
$address = $_POST['address'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];

if (isset($_POST['add_member'])) {
    $sql = "INSERT INTO member (email, password, address, member_name, gender, dob) VALUES ('$member_name','$password','$address','$email','$gender','$dob')";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanlimember&ac=add');
} elseif ($_POST["edit_member"]) {
    $sql = "UPDATE member SET member_name='$member_name',password='$password',address='$address',email='$email',gender='$gender',dob='$dob' where member_id = '$id'";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanlimember&ac=edit&id=' . $id);
} else {
    $sql = "DELETE FROM `member` WHERE member_id ='$id' ";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanlimember&ac=add');
}
?>