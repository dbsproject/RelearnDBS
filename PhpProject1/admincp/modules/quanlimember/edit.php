<?php
$sql = "select * from member where member_id='$_GET[id]'";
$run = mysqli_query($conn, $sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlimember/xuli.php?id=<?php echo $dong['member_id'] ?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">

        <tr>
            <td colspan="2"><div align="center">Edit Member</div></td>
        </tr>                       
        <tr>
            <th>Name</th>
            <td><input type="text" name="member_name" value = "<?php echo $dong['member_name'] ?>"</td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" value = "<?php echo $dong['email'] ?>"</td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="text" name="password" value = "<?php echo $dong['password'] ?>"</td>
        </tr>
        <tr>
            <th>Address</th>
            <td><input type="text" name="address" value = "<?php echo $dong['address'] ?>"</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select></td>
        </tr>
        <tr>
            <th>DoB</th>
            <td><input type="date" name="dob" value = "<?php echo $dong['dob'] ?>"</td>
        </tr>
        <tr>
            <td colspan="2"> <div align="center"> 
                    <button type="submit" name ="edit_member" id="edit" value="edit">Edit</button></div></td>
        </tr>
    </table>
</form> 