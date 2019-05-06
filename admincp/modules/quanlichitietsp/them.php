<form action="modules/quanlichitietsp/xuli.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
    <tr>
        <td colspan="2"><div align="center">Them chi tiet san pham</div></td>
    </tr>
    <tr>
        <td>ten sp</td>
        <td><input type="text" name="tensp"></td>
    </tr>
    <tr>
        <td>gia sp</td>
        <td><input type="text" name="gia"></td>
    </tr>
    <tr>
        <td>hinh anh</td>
        <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
        <td>mo ta</td>
        <td><textarea name="motasp" cols="40" rows="15"></textarea></td>
    </tr>
    <?php
    $sql = "select * from loaisp ";
    $run = mysqli_query($conn, $sql);
    ?>
    <tr>
        <td>loai sp</td>
        <td><select name="loaisp">
                <?php
                while($dong = mysqli_fetch_array($run)){
                    ?>
                <option value="<?php echo $dong['id_loaisp']?>" ><?php echo $dong['tenloaisp'] ?></option> 
                <?php } ?>
            </select></td>
    </tr>
    <tr>
        <td>thu tu</td>
        <td><input type="text" name="thutu"></td>
    </tr>
    <tr>
        <td colspan="2"> <div align="center"> 
                <button name ="them" value="them">them</button>
            </div>
        </td>
    </tr>
</table>
</form>

