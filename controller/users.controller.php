<?php
  
     if(isset($_REQUEST["action"])){
          if($_REQUEST["action"]=="show-user")
          { 
               $users=findDmdByUser($_SESSION["connect"]["iduser"]);
               loadView("findDmdByUser.html.php", ["users"=>$users],);
      }
          
     }
    

?>