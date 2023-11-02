<?php

    class Horarios extends Conexion {

        public function listar(string $req) {
            $retorno=[];
            $datos=$this->query($req);

            foreach($datos as $key=>$value){

                $hora = new Horario(); //instancia de la clase modelo/horario
                $hora -> setId($value["id"]);
                $hora -> setDescripcion($value["descripcion"]);
                $hora -> setOrden($value["orden"]);
                $retorno[]=$hora;
            }
            return $retorno;
        }

    }


?>