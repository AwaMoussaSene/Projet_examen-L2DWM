<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-auteur")
          { 
               $auteurs=findAllAuteur();
               loadView("showAuteur.html.php", ["auteurs"=>$auteurs],);
      }
          
     }
     else{
        $auteurs=findAllAuteur();
        loadView("showAuteur.html.php", ["auteurs"=>$auteurs],);
     }

?>