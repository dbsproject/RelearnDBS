<?php
$sql = "select * from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_sp desc";
$run = mysqli_query($conn, $sql);

?>
<table width='100%' border = '1'>
    <tr>
        <td>id</td>
        <td>ten sp</td>
        <td>hinh anh</td>
        <td>gia </td>
        <td>loai sp</td>
        <td>thu tu</td>
        <td colspan="2">quan li</td>
    </tr>
    <?php
    $i=0;
    while($dong = mysqli_fetch_array($run)){
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $dong['tensp'];?></td>
        <td><img src = "modules/quanlichitietsp/uploads/<?php echo$dong['hinhanh'];?>" width="60px" height="60px"/></td>
        <td><?php echo $dong['gia'];?></td>
        <td><?php echo$dong['tenloaisp'];?></td>
        <td><?php echo $dong['thutu'];?></td>
        <td><a href="index.php?quanli=quanlichitietsp&ac=sua&id=<?php echo $dong['id_sp']?>">sua</a></td>
        <td><a href="modules/quanlichitietsp/xuli.php?id=<?php echo $dong['id_sp']?>">xoa</a></td>  
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
