<?php

        function dd($data){
            echo "<pre>";
            var_dump($data);
            die;
        }
        function loadView(string $view,array $data=[],$layout="base"){
            ob_start();
            extract($data);
            require_once(ROOT."/views/".$view); 
            $contentForView=ob_get_clean();
            require_once(ROOT."/views/layout/".$layout.".layout.php") ;
        }

        function redirecToRoote(string $controller,string $action){
            header("location:".WEBROOT."/?controller=$controller&action=$action");
            exit;
        }

        function path(string $controller,string $action):string{
            return WEBROOT."/?controller=$controller&action=$action";
        }
?>