<?php
$sql = "SELECT * FROM `order` WHERE order_id='$_GET[id]'";
$run = mysqli_query($conn, $sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanliorder/xuli.php?id=<?php echo $dong['order_id'] ?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">

        <tr>
            <td colspan="2"><div align="center">Sửa đơn hàng</div></td>
        </tr>                       
        <tr>
            <th>Tên khách hàng</th>
            <td><input type="text" name="member_name" value = "<?php echo $dong['member_name'] ?>"</td>
        </tr>
        <tr>
            <th>Tình trạng</th>
            <td><input type="text" name="tinhtrang" value = "<?php echo $dong['tinhtrang'] ?>"</td>
        </tr>
        <tr>
            <th>Tổng tiền</th>
            <td><input type="text" name="tongtien" value = "<?php echo $dong['tongtien'] ?>"</td>
        </tr>
        <tr>
            <th>Ngày tạo</th>
            <td><input type="text" name="ngaytao" value = "<?php echo $dong['ngaytao'] ?>"</td>
        </tr>
            <th>Ngày xuất</th>
            <td><input type="date" name="ngayxuat" value = "<?php echo $dong['ngayxuat'] ?>"</td>
        </tr>
        <tr>
            <td colspan="2"> <div align="center"> 
                    <button type="submit" name ="edit_order" id="edit" value="edit">Edit</button></div></td>
        </tr>
    </table>
</form> 