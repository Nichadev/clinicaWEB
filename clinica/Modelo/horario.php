<?php
    
    class Horarios{
        private $id;
        private $descripcion;
        private $orden;


        public function __construct(){
            $this->setId(0);
            $this->setDescripcion("");
            $this->setOrder(0);
        }

 
        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;
        }

        public function getDescripcion()
        {
                return $this->descripcion;
        }

        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;
        }

        public function getOrden()
        {
                return $this->orden;
        }

        public function setOrden($orden)
        {
                $this->orden = $orden;
        }
    }




?>