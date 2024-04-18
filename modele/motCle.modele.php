<?php 
    function findAllMotCle(){
        $sql="SELECT * from mot_cle" ;
        return executeSelect($sql);
    
    }
    function findExemplaireByMotCle(int $idMotcle){
        $sql="SELECT * FROM `mot_cle`m ,`exemplaire`ex, `motexemplaire`mp
         WHERE m.id_mot=mp.id_mot AND  ex.idexemplaire=mp.idexemplaire and
         mp.id_mot=$idMotcle " ;
        return executeSelect($sql);
    
    }
?>