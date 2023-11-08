<?php

    class Horarios extends Conexion {

        public function listar(string $req) {
            $retorno=[];
            $datos=$this->query($req);

            foreach($datos as $key=>$value){

                $hora = new Horario(); //instancia de la clase modelo/horario
                $hora->setId($value["id"]);
                $hora->setDescripcion($value["descripcion"]);
                $hora->setOrden($value["orden"]);
                $retorno[]=$hora;
            }
            return $retorno;
        }

        public function ingresar(Horario $param){
            $ok = false;

            try {
                $sql = $this->prepare("insert into horarios(descripcion, orden) VALUES(:descripcion, :orden)");
                $desc = $param->getDescripcion();
                $ord = $param->getOrden();

                $sql->bindParam(":descripcion", $desc,PDO::PARAM_STR);
                $sql->bindParam(":orden", $ord, PDO::PARAM_INT);
                $sql->execute();
                $ok = true;
            } catch(PDOException $pdoex) {
                echo "ERROR".$pdoex->getMessage();
            } finally {
                return $ok;
            }
        }

        public function eliminar(Horario $param){

        }


    }


?>