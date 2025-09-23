<?php
    class Conexion {
        public function conectar(){
            $host = "localhost";
            $usuario = "root";
            $password = "";
            $base = "agenda";
            $conexion = mysqli_connect(
                $host, $usuario, $password, $base
            );
            return $conexion;
        }
    }
// new - reserva memoria 
    $obj = new Conexion();
    if($obj->conectar()){
        /* echo "funciona speect"; */
    }else {
        echo "no funciona";
    }

    // para mandar a llamar un metodo en php se usa una flecha ->

?>