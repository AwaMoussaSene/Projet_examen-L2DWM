<?php
     function connexion(string $login, string $password){
        $sql="select iduser,prenom, nom, login, mdp, telephone, libelle from users u,profil p  where p.idprofil=u.idprofil AND login Like '$login' AND mdp Like '$password'" ;
        return executeSelect($sql,[],true);
     }


?>