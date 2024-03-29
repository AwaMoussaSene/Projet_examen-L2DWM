<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-pret")
          { 
               $etatprets=findAllEtatPret();
               $prets=findAllPret();
               loadView("showPret.html.php", ["prets"=>$prets,"etatprets"=>$etatprets]);
        } 
          
     }
     

?>