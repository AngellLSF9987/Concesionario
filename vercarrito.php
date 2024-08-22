<?php
    session_start();
?>

<?php include "templatesCarrito/header.php";


    require_once("Producto.php");
    require_once("Conexion.php");
    require_once("RepositorioProductos.php");
    if(isset($_SESSION["concesionario"])){
        $concesionario=($_SESSION["concesionario"]);
        $conexion=new Conexion();            
        $repositorioProductos=new RepositorioProductos($conexion->getConexion()); 
        $indice=0;
        foreach($carrito as $id){
            $producto=$repositorioProductos->getProducto($id);
            echo $producto->mostrarBasico($indice);
            $indice++;
        }
    }
?>

<?php include "templatesCarrito/footer.php"?>
