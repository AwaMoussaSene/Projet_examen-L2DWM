<?php  
     

    function findAllOuvrage(){
        $sql="SELECT a.prenom,  a.nom, o.titre, o.date_edition FROM `ouvrage`o, `auteur`a, `ouvrage_auteur`ova
         WHERE o.id_ouvrage=ova.id_ouvrage AND a.id_auteur=ova.id_auteur;" ;
        return executeSelect($sql);

    }

?>