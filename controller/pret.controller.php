<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-pret")
          { 
               $etatprets=findAllEtatPret();
               $prets=findAllPret();
               loadView("showPret.html.php", ["prets"=>$prets,"etatprets"=>$etatprets]);
        }  if($_REQUEST["action"]=="form-pret")
        { 
             loadView("addPret.html.php");
        }
          
     }
     

?>