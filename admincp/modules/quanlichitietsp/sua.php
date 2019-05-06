<?php
$sql="select * from chitietsp where id_sp ='$_GET[id]'";
$run = mysqli_query($conn, $sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlichitietsp/xuli.php?id=<?php echo $dong['id_sp']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
    <tr>
        <td colspan="2"><div align="center">sua chi tiet san pham</div></td>
    </tr>
    <tr>
        <td>ten sp</td>
        <td><input type="text" name="tensp" value = <?php echo $dong['tensp']?>></td>
    </tr>
    <tr>
        <td>gia sp</td>
        <td><input type="text" name="gia" value = <?php echo $dong['gia']?>></td>
    </tr>
    <tr>
        <td>hinh anh</td>
        <td><input type="file" name="hinhanh"><img src="modules/quanlichitietsp/uploads/<?php echo $dong['hinhanh']?>" width="60px" height="60px"/>
        </td>
    </tr>
    <tr>
        <td>moo tar</td>
        <td><textarea name="motasp" cols="40" rows="15"><?php echo $dong['mota']?></textarea></td>
    </tr>
    <?php
    $sql_loaisp = "select * from loaisp ";
    $run_loaisp = mysqli_query($conn, $sql_loaisp);
    ?>
    <tr>
        <td>loai sp</td>
        <td><select name="loaisp">
                <?php
                while($dong_loaisp = mysqli_fetch_array($run_loaisp)){
                    if($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
                        
                    ?>
                <option selected="selected" value="<?php echo $dong_loaisp['id_loaisp']?>" ><?php echo $dong_loaisp['tenloaisp'] ?></option> 
                <?php }else{
                    
                ?>
                <option value="<?php echo $dong_loaisp['id_loaisp']?>" ><?php echo $dong_loaisp['tenloaisp'] ?></option> 
                <?php 
                }
                }
                ?>
            </select></td>
    </tr>
    <tr>
        <td>thu tu</td>
        <td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
    </tr>
    <tr>
        <td colspan="2"> <div align="center"> 
                <button name ="sua" value="sua">sua</button>
            </div>
        </td>
    </tr>
</table>
</form>
