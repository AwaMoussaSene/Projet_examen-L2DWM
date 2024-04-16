<?php  
     

    function findAllOuvrage($auteur){
        $sql="SELECT a.prenom,a.id_auteur, a.nom, o.titre, o.date_edition FROM `ouvrage`o, `auteur`a, `ouvrage_auteur`ova
         WHERE o.id_ouvrage=ova.id_ouvrage AND a.id_auteur=ova.id_auteur" ;
                 if ($auteur!="All") {
                    $sql.=" and a.id_auteur = '$auteur'" ;
                 }
        return executeSelect($sql);

    }

?>