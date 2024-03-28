<?php 

    if(isset($_REQUEST['controller'])){
        if($_REQUEST['controller']=="ouvrage"){
            require_once(ROOT."/controller/ouvrage.controller.php");
        }elseif($_REQUEST['controller']=="login"){
            require_once(ROOT."/controller/login.controller.php");
        }elseif($_REQUEST['controller']=="exemplaire"){
            require_once(ROOT."/controller/exemplaire.controller.php");
        }
        elseif($_REQUEST['controller']=="auteur"){
            require_once(ROOT."/controller/auteur.controller.php");
        }


    }else{
        require_once(ROOT."/controller/login.controller.php");
    }

    
    ?>

<?php ?>