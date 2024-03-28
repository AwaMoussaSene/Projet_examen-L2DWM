<?php 

function findAllExemplaire(){
    $sql="SELECT ov.id_ouvrage, libelle, nom, prenom, titre FROM `etatexemplaire`eta, `ouvrage`ov, `exemplaire`ex, `auteur`aut,
    `ouvrage_auteur`oa WHERE ov.id_ouvrage=ex.id_ouvrage AND  ov.id_ouvrage=oa.id_ouvrage
     AND aut.`id_auteur`=oa.`id_auteur`AND eta.idetatEx=ex.idetatEx;" ;
    return executeSelect($sql);

}
function findAllEtatExemplaire(){
    $sql="SELECT * from etatexemplaire" ;
    return executeSelect($sql);

}
?>
