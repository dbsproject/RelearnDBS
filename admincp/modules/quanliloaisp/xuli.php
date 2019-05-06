<?php
include ('../config.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$tenloaisp=$_POST["tenloaisp"];
$thutu=$_POST["thutu"];
if(isset($_POST["them"])){
    $sql="INSERT INTO loaisp (tenloaisp,thutu) VALUES ('$tenloaisp','$thutu')";
    mysqli_query($conn,$sql);
    header('location:../../index.php?quanli=quanliloaisp&ac=them');
}elseif($_POST["sua"]){
    $sql = "update loaisp set tenloaisp='$tenloaisp',thutu='$thutu' where id_loaisp = '$id'";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanliloaisp&ac=sua&id='.$id);
}else{
    $sql="delete from loaisp where id_loaisp ='$id' ";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanliloaisp&ac=them');
}
?>