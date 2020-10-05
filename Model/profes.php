<?php

require_once 'persona.php';

class Profes extends Persona{
    //atribute
    private $sueldo;
    private $pelo;
    function __construct($nombre,$apellido,$dni,$sueldo){
        parent:: __construct($nombre,$apellido);
        $this->dniSinLetra=$dni;
        $this->sueldo=$sueldo;
        $this->pelo=$pelo;

    }  

 
    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function getPelo()
    {
        return $this->pelo;
    }

    
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }   
    

    
    public function setPelo($pelo)
    {
        $this->pelo = $pelo;

        return $this;
    }
}