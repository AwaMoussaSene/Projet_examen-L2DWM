<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-ouvrage")
          { 
               $auteur=isset($_REQUEST["auteur"])?$_REQUEST["auteur"]:"All";
               $ouvrages=findAllOuvrage($auteur);
               $auteurs=findAllAuteur();
               loadView("showOuvrage.html.php", ["ouvrages"=>$ouvrages,"auteurs"=>$auteurs],);
          }
          if($_REQUEST["action"]=="all-ouvrage")
          { 
               loadView("catalogue.html.php", [],"catalogue");
          }  if($_REQUEST["action"]=="form-ouvrage")
          { 
               loadView("addOuvrage.html.php");
          }
          
     }
    

?>