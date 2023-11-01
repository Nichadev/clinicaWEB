<?php

class Personal {

    private $id;
    private $apellido;
    private $nombre;
    private $cargo_id;
    private $fecha_inicio;
    private $fecha_fin;

    public function __construct(){
        this->setId(0);
        this->setApellido("");
        this->setNombre("");
        this->setCargo_id(0);
        this->setFecha_inicio("");
        this->setFecha_fin("");
    }

    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCargo_id()
    {
        return $this->cargo_id;
    }

    public function setCargo_id($cargo_id)
    {
        $this->cargo_id = $cargo_id;
    }

    public function getFecha_inicio()
    {
        return $this->fecha_inicio;
    }

    public function setFecha_inicio($fecha_inicio)
    {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function getFecha_fin()
    {
        return $this->fecha_fin;
    }

    public function setFecha_fin($fecha_fin)
    {
        $this->fecha_fin = $fecha_fin;
    }
}

?>