<?php
     function connexion(string $login, string $password){
        $sql="select prenom, nom, login, mdp, telephone, libelle from users u,profil p  where p.idprofil=p.idprofil AND login Like '$login' AND mdp Like '$password'" ;
        return executeSelect($sql,[],true);
     }

     function findAllUsers(){
        $sql="select * from users " ;
        return executeSelect($sql);
     }
?>