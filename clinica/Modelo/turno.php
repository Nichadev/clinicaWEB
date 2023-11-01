<?php 

    class Turno{
        private $id_turno;
        private $id_profesional;
        private $id_especialidad;
        private $fecha;
        private $apellido_paciente;
        private $nombre_paciente;
        private $dni_paciente;
        private $obra_social;
        private $nro_credencial;
        private $atencion_particular;
        private $motivo_turno;
        private $estado;


        public function __construct(){
                this->
        }


        public function getEstado()
        {
                return $this->estado;
        }
        public function setEstado($estado)
        {
                $this->estado = $estado;
        }
        public function getMotivo_turno()
        {
                return $this->motivo_turno;
        }

        public function setMotivo_turno($motivo_turno)
        {
                $this->motivo_turno = $motivo_turno;
        }
        public function getAtencion_particular()
        {
                return $this->atencion_particular;
        }

        public function setAtencion_particular($atencion_particular)
        {
                $this->atencion_particular = $atencion_particular;
        }

        public function getNro_credencial()
        {
                return $this->nro_credencial;
        }
    
        public function setNro_credencial($nro_credencial)
        {
                $this->nro_credencial = $nro_credencial;
        }

        public function getObra_social()
        {
                return $this->obra_social;
        }

        public function setObra_social($obra_social)
        {
                $this->obra_social = $obra_social;
        }
        public function getDni_paciente()
        {
                return $this->dni_paciente;
        }

        public function setDni_paciente($dni_paciente)
        {
                $this->dni_paciente = $dni_paciente;
        }
        
        public function getNombre_paciente()
        {
                return $this->nombre_paciente;
        }
        public function setNombre_paciente($nombre_paciente)
        {
                $this->nombre_paciente = $nombre_paciente;
        }

        public function getApellido_paciente()
        {
                return $this->apellido_paciente;
        }

        public function setApellido_paciente($apellido_paciente)
        {
                $this->apellido_paciente = $apellido_paciente;
        }
        
        public function getFecha()
        {
                return $this->fecha;
        }
    
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;
        }

        public function getId_especialidad()
        {
                return $this->id_especialidad;
        }
        
        public function setId_especialidad($id_especialidad)
        {
                $this->id_especialidad = $id_especialidad;
        }
        
        public function getId_profesional()
        {
                return $this->id_profesional;
        }
        
        public function setId_profesional($id_profesional)
        {
                $this->id_profesional = $id_profesional;
        }
        
        public function getId_turno()
        {
                return $this->id_turno;
        }
        
        public function setId_turno($id_turno)
        {
                $this->id_turno = $id_turno;
        }
    }


?>