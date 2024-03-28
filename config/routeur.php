<?php 

    if(isset($_REQUEST['controller'])){
        if($_REQUEST['controller']=="ouvrage"){
            require_once(ROOT."/controller/ouvrage.controller.php");
        }elseif($_REQUEST['controller']=="login"){
            require_once(ROOT."/controller/login.controller.php");
        }


    }else{
        require_once(ROOT."/controller/login.controller.php");
    }

    
    ?>

<?php ?>