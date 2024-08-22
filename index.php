<?php
session_start();
?>

<?php include "templatesIndex/header.php" ?>    
        <?php
        require_once("Producto.php");
        require_once("Conexion.php");
        require_once("RepositorioProductos.php");

        $conexion = new Conexion();
        $repositorioProductos = new RepositorioProductos($conexion->getConexion());

        $lista = $repositorioProductos->listarTodosLosProductos();
        foreach ($lista as $elemento) {
          echo $elemento->mostrarMini();
        }
        ?>  
  <?php include "templatesIndex/footer.php" ?>
  
       