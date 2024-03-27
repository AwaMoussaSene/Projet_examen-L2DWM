<?php  
     

    function findAllOuvrage(){
        $sql="SELECT * FROM `ouvrage` " ;
        return executeSelect($sql);

    }

?>