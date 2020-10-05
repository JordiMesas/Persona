<?php

require_once 'persona.php';

// la palabra clave hace que no de mas herencias esta clase

final class Alumnes extends Persona{
    //atributes
    private $numeroMatricula;    

    function __construct($nombre,$apellido,$numeroMatricula){
        parent:: __construct($nombre,$apellido);
        $this->numeroMatricula=$numeroMatricula;        
    }

    //getters
    
    public function getNumeroMatricula()
    {
        return $this->numeroMatricula;
    }
    
    public function getNotaPro()
    {
        return $this->notaPro;
    }

    //setters
   
    public function setNumeroMatricula($numeroMatricula)
    {
        $this->numeroMatricula = $numeroMatricula;

        return $this;
    }

    
    public function setNotaPro($notaPro)
    {
        $this->notaPro = $notaPro;

        return $this;
    }

    // own method

    public function saludo(String $mensaje):String{
        return 'Hola Mundo';
    }

    public function calcularDni(){
        
    }
}

