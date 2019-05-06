<div class="content">
<?php
if(isset($_GET['quanli'])){
    $tam=$_GET['quanli'];
}else{
    $tam='';
}if($tam=='quanliloaisp'){
    include('modules/quanliloaisp/main.php');
}else if($tam=='quanlichitietsp'){
    include('modules/quanlichitietsp/main.php');
}else if($tam=='quanlimember'){
    include('modules/quanlimember/main.php');
}else if($tam=='quanliorder'){
    include('modules/quanliorder/main.php');
}
?>
</div>
<div class="clear"></div>

