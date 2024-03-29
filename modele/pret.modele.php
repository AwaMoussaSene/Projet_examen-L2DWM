<?php
        function findAllPret(){
            $sql="SELECT titre,nom, prenom, datepret, dateprevue, datereel,ep.libelle FROM `avoirpret`ap, 
            `demande_pret`dp,`pret`p,`ouvrage`ov,`users`u, `etatpret`ep WHERE ov.id_ouvrage=dp.id_ouvrage AND 
            ap.idpret=p.idpret AND u.iduser= dp.iduser AND ep.idetatpret= ep.idetatpret AND 
            ap.iddemande= dp.iddemande;" ;
            return executeSelect($sql);
        
        }
        function findAllEtatPret(){
            $sql="SELECT * FROM etatpret ;" ;
            return executeSelect($sql);
        
        }
?>