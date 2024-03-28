<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-auteur")
          { 
               $auteurs=findAllAuteur();
            //    loadView("showOuvrage.html.php", ["ouvrages"=>$ouvrages],);
      }
          
     }
     else{
        $auteurs=findAllAuteur();
        // loadView("showOuvrage.html.php", ["ouvrages"=>$ouvrages],);
     }

?>