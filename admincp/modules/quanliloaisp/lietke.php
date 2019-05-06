<?php
$sql = "select * from loaisp order by id_loaisp desc";
$run = mysqli_query( $conn,$sql);
?>
<table width="100%" border="1">
    <tr>
        <td>ID</td>
        <td>Ten sp</td>
        <td>Thu tu</td>
        <td colspan="2">Quản lí</td>
    </tr>
    <?php 
    $i=0;
    while($dong= mysqli_fetch_array($run)){
    ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $dong['tenloaisp']?></td>
        <td><?php echo $dong['thutu']?></td>
        <td><a href='index.php?quanli=quanliloaisp&ac=sua&id=<?php echo $dong['id_loaisp']?>'>sua</a></td>
        <td><a href='modules/quanliloaisp/xuli.php?id=<?php echo $dong['id_loaisp']?>'>xoa</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
