<?php

class obraSocial {
    private $id;
    private $descripcion;

    public function __construct(){
        this->setId(0);
        this->setDescripcion("");
    }

    
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }
}





?>