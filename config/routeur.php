<?php 

    if(isset($_REQUEST['controller'])){
        if($_REQUEST['controller']=="ouvrage"){
            require_once(ROOT."/controller/ouvrage.controller.php");
        }

    }else{
        require_once(ROOT."/controller/ouvrage.controller.php");
    }

    
    ?>

<?php ?>