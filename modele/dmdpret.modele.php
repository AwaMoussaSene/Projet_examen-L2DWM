
<?php 
function findAllDmdPret(){
    $sql="SELECT * FROM `ouvrage`ov, `demande_pret`dp, `users`u WHERE ov.id_ouvrage=dp.id_ouvrage AND u.iduser=dp.iduser;" ;
    return executeSelect($sql);

}