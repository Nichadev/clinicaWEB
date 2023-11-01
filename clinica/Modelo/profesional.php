<?php

class Profesional {
    private $id;
    private $apellido;
    private $nombre;
    private $matricula;
    private $titulo_prof;
    private $email;
    private $celular;
    private $foto;
    private $estado;

    public function __construct(){
        this->setId(0);
        this->setApellido("");
        this->setNombre("");
        this->setMatricula("");
        this->setTitulo_prof("");
        this->setEmail("");
        this->setCelular(0);
        this->setFoto("");
        this->setEstado("");
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

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

    }

    public function getTitulo_prof()
    {
        return $this->titulo_prof;
    }

    public function setTitulo_prof($titulo_prof)
    {
        $this->titulo_prof = $titulo_prof;

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;

    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

    }
}

?>