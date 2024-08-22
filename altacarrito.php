<?php
    session_start();
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        if(isset($_SESSION["concesionario"])){
            $concesionario=$_SESSION["concesionario"];           
        }else{
            $concesionario=[];            
        }
        $concesionario[]=$id;
        $_SESSION["concesionario"]=$concesionario;            
    }
    header("Status: 301 Moved Permanently");
    header("Location: index.php");
    exit;
?>
