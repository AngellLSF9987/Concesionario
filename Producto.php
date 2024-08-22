<?php
class Producto
{
    public $id;
    public $nombre;
    public $descripcion;
    public $categoria;
    public $precio;
    public $imagen;

    public function __construct() {}

    public function setPropiedades($id, $nombre, $descripcion, $categoria, $precio, $imagen)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->imagen = $imagen;
    }

    public function mostrarMini()
    {
        $aux = "<div class='img-fluid'>
            " . $this->img() . "
        <div class='card-body'>
          <h5 class='card-title'>" . $this->nombre . "</h5>
          <p class='card-text'>" . substr($this->descripcion, 0, 20) . "....</p><br>
          <p>" . $this->precio . "€</p><br><hr>
          <a href='detalle.php?id=" . $this->id . "' class='btn btn-secondary btn-sm'>Detalle Producto</a>
        </div>
      </div>";
        return $aux;
    }

    public function mostrarBasico($indice)
    {
        $aux = "<div style='widht:50%; margin: 0 10em;'><br>" . $this->id . ", " . $this->nombre . ", " . $this->imagen;
        $aux .= "<div style='margin: 10em 10em;display: flex; flex-direction:column; justify-content: space-between;'>
        " . $this->imgMini(400) . "</div>";
        $aux .= "<div style='display:flex; flex-direction:row; justify-content:space-between;margin-bottom: 20px;'>
        <a href='borrarcarrito.php?indice=$indice' class='btn btn-dark btn-lg'>Borrar Carrito</a>";
        $aux .= "<a href='index.php?id=" . $this->id . "' class='btn btn-secondary btn-lg'>Volver a Listado</a></div>";
        return $aux;
    }

    public function mostrarCompleto()
    {
        $aux = "<div style='width: 100%; margin: auto 0; display: flex; flex-wrap:wrap; clear: both;'>        
                    <div style='width: 40%; margin: auto 2em; padding: 2em 3em;'>        
                        <h2 class='text-center' style:'color:lightgrey; '>" . $this->nombre . "</h2><br><hr>
                        <p class='card-text'>" . $this->descripcion . " </p>
                    </div>
                    <div style='width: 40%; margin: auto 0; display: flex; flex-direction: row; padding: 2em 3em;'>
                        <p class='card-text'>" . $this->imgMini(530) . " </p>
                    </div>
                    <div style='width: 100%; margin: auto; text-align: center;'>
                        <hr><br><p class='text-center' style='font-weight:bold;font-size:2em;'>" . $this->precio . "€</p><br><hr>         
                    </div>
                        <div style='width: 100%; margin: auto 0; display:flex; flex-direction:row; justify-content:space-around; align-items: center;'><a href='altacarrito.php?id=" . $this->id . "' class='btn btn-dark btn-lg'>Comprar</a>
                            <a href='index.php?id=" . $this->id . "' class='btn btn-secondary btn-lg'>Volver a Listado</a>
                        </div> 
                    </div>                   
                </div>";

        return $aux;
    }

    public function imgMini($alto)
    {
        return "<img src='img/" . $this->imagen . "' style='width:" . $alto . "px'>";
    }

    public function img()
    {
        return "<img src='img/" . $this->imagen . "' class='img-fluid'>";
    }
}
