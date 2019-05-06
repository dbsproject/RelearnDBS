<form action="modules/quanlimember/xuli.php" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
        <tr>
            <td colspan="2"><div align="center">Add Member</div></td>
        </tr>
        <tr>
            <td>Member Name</td>
            <td><input type="text" name="member_name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </td>     
        </tr>
        <tr>
            <td>DoB</td>
            <td><input type="date" name="dob"></td>
        </tr>

        <tr>
            <td colspan="2"> <div align="center"> 
                    <button type="submit" name ="add_member" id="add" value="add">Add</button></div></td>
        </tr>
    </table>
</form>

