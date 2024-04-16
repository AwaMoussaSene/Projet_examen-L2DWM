<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-exemplaire")
          { 
               $exemplaires=findAllExemplaire();
               loadView("showExemplaire.html.php", ["exemplaire"=>$exemplaires],);
          } if($_REQUEST["action"]=="form-exemplaire")
          { 
               loadView("addExemplaire.html.php");
          }
          
     }
    
?>