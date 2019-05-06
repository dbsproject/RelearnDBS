<?php
include ('../config.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : "";
$tensp=$_POST["tensp"];
$gia=$_POST["gia"];
$mota=$_POST["motasp"];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
move_uploaded_file($hinhanh_tmp, "uploads/".$hinhanh);
$loaisp=$_POST["loaisp"];
if(isset($_POST["them"])){
    $sql="INSERT INTO chitietsp (tensp,thutu,mota,gia,id_loaisp,hinhanh) VALUES ('$tensp','$thutu','$mota','$gia','$loaisp','$hinhanh')";
    mysqli_query($conn,$sql);
    header('location:../../index.php?quanli=quanlichitietsp&ac=them');
}elseif(isset($_POST["sua"])){
    if($hinhanh!=''){
    $sql = "update chitietsp set tensp='$tensp',thutu='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp',hinhanh='$hinhanh' where id_sp = '$id'";
    }
    else{
         $sql = "update chitietsp set tensp='$tensp',thutu='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp' where id_sp = '$id'";
    }mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanlichitietsp&ac=sua&id='.$id);
    
}else{
    $sql="delete from chitietsp where id_sp ='$id' ";
    mysqli_query($conn, $sql);
    header('location:../../index.php?quanli=quanlichitietsp&ac=them');
}
?>