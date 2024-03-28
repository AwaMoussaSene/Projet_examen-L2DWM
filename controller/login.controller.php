<?php 
         if(isset($_REQUEST["action"])){
            if($_REQUEST["action"]=="form-login")
            { 
                 loadView("login.html.php", [],"connexion");
            }    
       }else{
         loadView("login.html.php", [],"connexion");
       }
       if(isset($_POST["connect"])){
         $connect=connexion($_POST["login"], $_POST["mdp"]);
         $_SESSION["connect"] = $connect;
         if($connect!=null){
         if ($connect["libelle"]=="RB"){
            redirecToRoote("ouvrage","show-ouvrage");
            }
         }
         else{
            $message="incorect";
         }
      }
      $users=findAllUsers();
?>