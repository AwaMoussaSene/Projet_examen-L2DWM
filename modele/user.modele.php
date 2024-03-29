<?php

        function findAllUsers(){
            $sql="select * from users " ;
            return executeSelect($sql);
        }
        function findDmdByUser(int $iduser){
            $sql="SELECT * FROM `ouvrage`ov, `users`u,`demande_pret`dp,`etatdemande`ed  WHERE u.iduser=dp.iduser AND
             ov.id_ouvrage=dp.id_ouvrage and u.iduser=$iduser  AND ed.idetatdmd=dp.idetatdmd";
            return executeSelect($sql);
        
        }
?>