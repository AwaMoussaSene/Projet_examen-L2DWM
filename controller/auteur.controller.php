<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-auteur")
          { 
               $auteurs=findAllAuteur();
               loadView("showAuteur.html.php", ["auteurs"=>$auteurs],);
      } if($_REQUEST["action"]=="form-auteur")
      { 
           loadView("addAuteur.html.php");
      }
          
     }
    

?>