<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-exemplaire")
          { 
               $exemplaires=findAllExemplaire();

               loadView("showExemplaire.html.php", ["exemplaire"=>$exemplaires],);
      }
          
     }
     else{
        $exemplaires=findAllExemplaire();
        loadView("showExemplaire.html.php", ["exemplaire"=>$exemplaires],);
     }

?>