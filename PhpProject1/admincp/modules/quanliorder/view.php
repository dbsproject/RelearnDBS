<?php
$sql = "SELECT * FROM `order`";
$run = mysqli_query($conn,$sql);
?>

    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Quản lí đơn hàng</div></td>
        </tr>
    <tr>
        <td>ID</td>
        <td>Tên khách hàng</td>
        <td>Tổng tiền</td>
        <td>Ngày tạo</td>
        <td>Ngày xuất</td>
        <td>Tình trạng</td>
        <td colspan="2">Quản lí</td>
        
    </tr>

        <?php
    $i = 0;
    while ($dong = mysqli_fetch_array($run)) {
        ?>
        <tr>

            <td><?php echo $i; ?></td>
            <td><?php echo $dong['member_name'] ?></td>
            <td><?php echo $dong['tongtien'] ?></td>
            <td><?php echo $dong['ngaytao'] ?></td>
            <td><?php echo $dong['ngayxuat'] ?></td>
            <td><?php echo $dong['tinhtrang'] ?></td>
            <td><a href='index.php?quanli=quanliorder&ac=edit&id=<?php echo $dong['order_id'] ?>'>edit</a></td>
            <td><a href='modules/quanliorder/xuli.php?id=<?php echo $dong['order_id'] ?>'>delete</a></td>
        </tr>
        <?php
        $i++;
    }
    ?>
</table>
