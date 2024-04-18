<?php 

function findAllExemplaire(string $etat){
    $sql="SELECT m.id_mot, ov.id_ouvrage, libelle, nom, prenom, titre FROM `etatexemplaire`eta, `ouvrage`ov, `exemplaire`ex, `auteur`aut,
    `ouvrage_auteur`oa,`mot_cle`m,`motexemplaire`mp WHERE ov.id_ouvrage=ex.id_ouvrage AND  ov.id_ouvrage=oa.id_ouvrage
     AND aut.`id_auteur`=oa.`id_auteur`AND eta.idetatEx=ex.idetatEx and m.id_mot=mp.id_mot and mp.idexemplaire=ex.idexemplaire;" ;
              if ($etat!="All") {
                $sql.=" and libelle like '$etat'" ;
             }
    return executeSelect($sql);

}
function findAllEtatExemplaire(){
    $sql="SELECT * from etatexemplaire" ;
    return executeSelect($sql);

}function findExemplaireByOuvrage(int $idOuvrage){
    $sql="SELECT ov.id_ouvrage, libelle, nom, prenom, titre FROM `etatexemplaire`eta, `ouvrage`ov, `exemplaire`ex, `auteur`aut,
    `ouvrage_auteur`oa WHERE ov.id_ouvrage=ex.id_ouvrage AND  ov.id_ouvrage=oa.id_ouvrage
     AND aut.`id_auteur`=oa.`id_auteur`AND eta.idetatEx=ex.idetatEx and ex.id_ouvrage=$idOuvrage " ;
    return executeSelect($sql);

}


?>
