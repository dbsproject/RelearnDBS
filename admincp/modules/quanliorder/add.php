<form action="modules/quanliorder/xuli.php" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Thêm đơn hàng</div></td>
        </tr>
        <tr>
            <td>Tên khách hàng</td>
            <td><input type="text" name="member_name"></td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td><input type="text" name="tinhtrang"></td>
        </tr>
        <tr>
            <td>Tổng tiền</td>
            <td><input type="text" name="tongtien"></td>
        </tr>
        <tr>
            <td>Ngày nhập</td>
            <td><input type="date" name="ngaytao"></td>
        </tr>
        <tr>
            <td>Ngày xuất</td>
            <td><input type="date" name="ngayxuat"></td>
        </tr>

        <tr>
            <td colspan="2"> <div align="center"> 
                    <button type="submit" name ="add_order" id="add" value="add">Thêm</button></div></td>
        </tr>
    </table>
</form>

