<div class="left">
        <?php
    if (isset($_GET['ac'])) {
        $tam = $_GET['ac'];
    } else {
        $tam = '';
    }if ($tam == 'add') {
        include('modules/quanliorder/add.php');
    }if ($tam == 'edit') {
        include('modules/quanliorder/edit.php');
    }
    ?>
        <?php
    if (isset($_GET['ac'])) {
        $tam = $_GET['ac'];
    } else {
        $tam = '';
    }if ($tam == 'them') {
        include('modules/quanliorder/add.php');
    }if ($tam == 'sua') {
        include('modules/quanliorder/edit.php');
    }
    ?>
</div>
<div class="right">
    <?php
    include('modules/quanliorder/view.php');
    ?>
</div>

