<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="index.css">
   <title>Horarios</title>
</head>
<body>
    
    <h1>Horarios</h1>
    <button><a href="formIngresar.php">Nuevo horario</a></button>
    <button><a href="">Eliminar horario</a></button>
    
    <hr>

    <table>
        <thead>
            <tr>
                <th>Acciones</th>
                <th>ID</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        
        <tbody>
            <?php

                require_once "../../Conexion/Conexion.php";
                require_once "../../Controlador/cont_horario.php";
                require_once  "../../Modelo/mod_horario.php";


                $obt_horario = new Horarios(); //instancia de controlador/cont_horario.php

                if($obt_horario -> abrirConexion()) {
                    $rs = $obt_horario -> listar("select * from horarios order by orden asc");

                    foreach($rs as $key => $value){
                        echo "<tr>";
                        echo "<td> 
                            <a href='formEditar.php ? id=".$value->getId()."'>  
                            Editar </a></td>";
                        echo "<td>".$value->getId()."</td>";
                        echo "<td>".$value->getDescripcion()."</td>";
                        echo "</tr>";
                    }
                    $obt_horario->cerrarConexion();
                }

            ?>
        </tbody>
    </table>

</body>
</html>