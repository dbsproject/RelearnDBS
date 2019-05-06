<div class="left">
    <?php
    if(isset($_GET['ac']))
        {
        $tam=$_GET['ac'];
        }else
            {
            $tam='';
            }if($tam=='them')
                    {
                include('modules/quanlichitietsp/them.php');
                    }if($tam=='sua'){
                        include('modules/quanlichitietsp/sua.php');
                    }
    ?>
</div>
<div class="right">
    <?php
    include('modules/quanlichitietsp/lietke.php');
    ?>
</div>
