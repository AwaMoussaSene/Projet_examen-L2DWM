<?php 
        if($_REQUEST["action"]=="show-exemplaire-mot")
        { 
             $exemplaireMots=findExemplaireByMotCle($_REQUEST["idmotcle"]);
             loadView("findExemplaireByMotCle.html.php", ["exemplaireMots"=>$exemplaireMots],);
        } 
?>