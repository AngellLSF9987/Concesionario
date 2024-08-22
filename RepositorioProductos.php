<?php
    class RepositorioProductos {
        public $conexion;

        public function __construct($conexion){
            $this->conexion=$conexion;
            
            $consulta="CREATE TABLE IF NOT EXISTS productos (
                id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(255) NOT NULL,
                descripcion TEXT,
                precio DECIMAL(10,2),
                imagen VARCHAR(255) NOT NULL,
                categoria VARCHAR(255)
            );";
            $conexion->query($consulta);
        }

        public function listarTodosLosProductos(){
            $entradas=[];
            $consulta="SELECT * FROM productos";
            $resultado=$this->conexion->query($consulta);    
            while($elemento=$resultado->fetch_object()){            
                $aux=new Producto();
                $aux->setPropiedades($elemento->id, $elemento->nombre, $elemento->descripcion, $elemento->categoria, $elemento->precio, $elemento->imagen);
                $entradas[]=$aux;
            }

            return $entradas;
        }

        public function getProducto($id){            
            $consulta="SELECT * FROM productos where id=$id";
            $resultado=$this->conexion->query($consulta);    
            if($elemento=$resultado->fetch_object()){            
                $aux=new Producto();
                $aux->setPropiedades($elemento->id, $elemento->nombre, $elemento->descripcion, $elemento->categoria, $elemento->precio, $elemento->imagen);
                $entradas[]=$aux;
            }
            return $aux;
        }

        public function insertarProducto($entrada){
            $sentencia = $this->conexion->prepare("INSERT INTO entradas (nombre, descripcion, precio, imagen, categoria) VALUES (?, ?, ?, ?)");            
            $sentencia->bind_param('$nombre', '$descripcion', '$precio', '$imagen', '$categoria');

            $nombre = $entrada->nombre;
            $descripcion = $entrada->descripcion;
            $precio = $entrada->precio;
            $imagen = $entrada->imagen;            

            // insertar una fila            
            $sentencia->execute();

            //Después de insertar en la BBDD, recogemos el id generado
            return $this->conexion->insert_id;
        }

        public function editarEntrada($entrada){
            $sentencia=$this->conexion->prepare("UPDATE entradas SET nombre=?, descripcion=?, precio=?, imagen=?  categoria=? WHERE id=?");

            $sentencia->bind_param('$nombre', '$descripcion', '$precio', '$imagen', '$categoria');

            $nombre = $entrada->nombre;
            $descripcion = $entrada->descripcion;
            $precio = $entrada->precio;
            $imagen = $entrada->imagen;
            $categoria = $entrada->categoria;
            $id=$entrada->id;

            $sentencia->execute();
        }


    }   
?>