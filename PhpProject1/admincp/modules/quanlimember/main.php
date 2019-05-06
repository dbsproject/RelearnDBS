<div class="left">
        <?php
    if (isset($_GET['ac'])) {
        $tam = $_GET['ac'];
    } else {
        $tam = '';
    }if ($tam == 'add') {
        include('modules/quanlimember/add.php');
    }if ($tam == 'edit') {
        include('modules/quanlimember/edit.php');
    }
    ?>
        <?php
    if (isset($_GET['ac'])) {
        $tam = $_GET['ac'];
    } else {
        $tam = '';
    }if ($tam == 'them') {
        include('modules/quanlimember/add.php');
    }if ($tam == 'sua') {
        include('modules/quanlimember/edit.php');
    }
    ?>
</div>
<div class="right">
    <?php
    include('modules/quanlimember/view.php');
    ?>
</div>

