<?php
session_start();
    if(isset($_GET["indice"])){
        $indice=$_GET["indice"];
        $concesionario=$_SESSION["concesionario"];
        array_splice($concesionario,$indice,1);
            $_SESSION["concesionario"]=($concesionario);
        }else{
            $_SESSION["concesionario"]=[];
        }

    header("Status: 301 Moved Permanently");
    header("Location: index.php");
    exit;

?>