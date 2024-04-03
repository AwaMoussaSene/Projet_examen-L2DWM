<?php
  
     if(isset($_REQUEST["action"])){

        if($_REQUEST["action"]=="val-pret")
        { 
             $dmdprets=findAllDmdPret();
             loadView("valPret.html.php", ["dmdprets"=>$dmdprets]);
      }
      if($_REQUEST["action"]=="form-dmd")
      { 
           loadView("addDmd.html.php");
    }
          
     }
     

?>