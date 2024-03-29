<?php 
         if(isset($_REQUEST["action"])){
            if($_REQUEST["action"]=="deconnect"){
               unset($_SESSION["connect"]);
               session_destroy();
               loadView("login.html.php", [],"connexion");
         }
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
         // dd($connect);
         if($connect!=null){
         if ($connect["libelle"]=="RB"){
            redirecToRoote("ouvrage","show-ouvrage");
            }
            elseif($connect["libelle"]=="RP"){
               redirecToRoote("pret","show-pret");
               }
               elseif($connect["libelle"]=="Adherent"){
                  redirecToRoote("user","show-user");
                  }
         }
         else{
            $message="incorect";
         }
      }
      $users=findAllUsers();
?>