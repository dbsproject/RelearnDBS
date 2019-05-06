<div class="left">
    <?php
    if (isset($_GET['ac'])) {
        $tam = $_GET['ac'];
    } else {
        $tam = '';
    }if ($tam == 'them') {
        include('modules/quanliloaisp/them.php');
    }if ($tam == 'sua') {
        include('modules/quanliloaisp/sua.php');
    }
    ?>
</div>
<div class="right">
    <?php
    include('modules/quanliloaisp/lietke.php');
    ?>
</div>

