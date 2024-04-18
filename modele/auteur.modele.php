<?php
        function findAllAuteur(){
            $sql="SELECT id_auteur, nom, prenom, profession from auteur" ;
            return executeSelect($sql);
        
        }


?>