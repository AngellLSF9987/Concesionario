<?php
session_start();
require_once("Producto.php");
require_once("Conexion.php");
require_once("RepositorioProductos.php");

        $conexion = new mysqli("localhost", "root", "");
        $conexion->select_db("concesionario");
        $conexion->set_charset("utf8");
        $id = isset($_GET["id"]) ? $_GET["id"] : 1;
        $consulta = $conexion->query("SELECT * FROM productos WHERE id=$id");
        $productos = $consulta->fetch_object();
            //echo $productos->nombre;
?>

<?php include "templatesDetalle/header.php"?>
    <div style="width: 100%; margin: auto; display:flex; flex-direction:colunm;"><h1 style="padding-left: 12em;"> Detalle - Automóvil </h1></div><hr>

    <?php
        
        $conexion = new Conexion();
        $repositorioProductos=new RepositorioProductos($conexion->getConexion());

        $lista=$repositorioProductos->getProducto($id);
        $elemento = $lista;
        echo $elemento->mostrarCompleto();

        ?>
<?php include "templatesDetalle/footer.php"?>

