<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-exemplaire")
          { 
               $etat=isset($_REQUEST["etat"])?$_REQUEST["etat"]:"All";
               $exemplaires=findAllExemplaire($etat);
               $EtatExemplaires=findAllEtatExemplaire();
               loadView("showExemplaire.html.php", ["exemplaire"=>$exemplaires,"EtatExemplaires"=>$EtatExemplaires],);
          } if($_REQUEST["action"]=="form-exemplaire")
          { 
               loadView("addExemplaire.html.php");
          }if($_REQUEST["action"]=="show-exemplaire-ouvrage")
          { 
               $exemplaireOuvrages=findExemplaireByOuvrage($_REQUEST["idOuvrage"]);
               loadView("findExemplaireByOuvrage.html.php", ["exemplaireOuvrage"=>$exemplaireOuvrages],);
          } 
          
     }
    
?>