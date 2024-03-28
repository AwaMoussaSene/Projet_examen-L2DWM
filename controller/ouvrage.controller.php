<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-ouvrage")
          { 
               $ouvrages=findAllOuvrage();
               loadView("showOuvrage.html.php", ["ouvrages"=>$ouvrages],);
      }
          
     }
     else{
        $ouvrages=findAllOuvrage();
        loadView("showOuvrage.html.php", ["ouvrages"=>$ouvrages],);
     }

?>