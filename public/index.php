<?php
    session_start();
    define("ROOT",str_replace('\public',"",$_SERVER['DOCUMENT_ROOT']));
    require_once(ROOT."/config/bootstrap.php");
    require_once(ROOT."/config/routeur.php");

