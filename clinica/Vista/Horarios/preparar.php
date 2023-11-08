<?php
    require_once "../../Conexion/conexion.php";
    require_once "../../Modelo/horario.php";
    require_once "../../Controlador/cont_horario.php";

    if(isset($_POST["boton_nuevo"])){
        $ob = new Horarios(); //instancia al controlador
        if($ob->abrirConexion()){
            $h = new Horario(); //instancia al modelo
            $h -> setDescripcion($_POST["descripcion"]);
            $h -> setOrden($_POST["orden"]);

            if($ob -> ingresar($h)){
                echo "registro exitosamente";
            }
            else {
                echo "error al intentar registrar";
            }
            $ob->cerrarConexion();
        }else {
            echo "no se conectó a la base de datos";
        }
    }

    echo "<button><a href='index.php'>Volver al Inicio</a></button>";

?>