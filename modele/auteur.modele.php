<?php
        function findAllAuteur(){
            $sql="SELECT nom, prenom, profession from auteur" ;
            return executeSelect($sql);
        
        }
?>