<?php 

    function obligatoire(string $namechamp,string $value,array &$error,$sms="champ obligatoire"){
        if(empty($value)){
            $error[$namechamp]=$sms;
        }
    }
    function validate(array $error):bool{
       return count($error) == 0;
    }
?>