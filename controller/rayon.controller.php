<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-rayon")
          { 
               $rayons=findAllRayon();
               loadView("showRayon.html.php", ["rayons"=>$rayons],);
          }
          
     }

?>