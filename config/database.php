<?php
        function openConnexion(){
            $servername = 'localhost';
            $username = 'root';
            $password ="";
            $dbname ="bd_bibliotheque";
            $data=null;
            $conn=null;
                try {
                    $conn= new PDO("mysql:host=$servername;dbname=$dbname" ,$username ,$password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                } catch (PDOException $th) {
                    echo "Erreur :".$th->getMessage();
                }
                return $conn;
    }
    function closeConnexion($conn){
        $conn=null;
}
function executeSelect(string $sql, array $data=[],$one=false){
    $result=[];
    $conn=openConnexion();
    $statement=$conn->prepare($sql);
     count($data)==0?$statement->execute():$statement->execute($data);
     $result=$one==true?$statement->fetch():$statement->fetchAll();
     return $result;
}
function executeUpDate(string $sql, array $data){
    $conn=openConnexion();
    $statement=$conn->prepare($sql);
    $statement->execute($data);
    closeConnexion($conn);
}
?>