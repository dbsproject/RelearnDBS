<?php
$sql = "select * from member order by member_id desc";
$run = mysqli_query($conn, $sql);
?>

<table width="100%" border="1">
    <tr>
        <td colspan="2"><div align="center">Quan li member</div></td>
    </tr>      
    <tr>
        <td>ID</td>
        <td>Member_name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Address</td>
        <td>Gender</td>
        <td>DoB</td>
        <td colspan="2">Action</td>
    </tr>
    <?php
    $i = 0;
    while ($dong = mysqli_fetch_array($run)) {
        ?>
        <tr>

            <td><?php echo $i; ?></td>
            <td><?php echo $dong['member_name'] ?></td>
            <td><?php echo $dong['email'] ?></td>
            <td><?php echo $dong['password'] ?></td>
            <td><?php echo $dong['address'] ?></td>
            <td><?php echo $dong['gender'] ?></td>
            <td><?php echo $dong['dob'] ?></td>
            <td><a href='index.php?quanli=quanlimember&ac=edit&id=<?php echo $dong['member_id'] ?>'>edit</a></td>
            <td><a href='modules/quanlimember/xuli.php?id=<?php echo $dong['member_id'] ?>'>delete</a></td>
        </tr>

        <?php
        $i++;
    }
    ?>
</table>

