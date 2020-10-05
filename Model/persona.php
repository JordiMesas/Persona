<?php

// la palabra clave abstract hace que no se permita hacer instancia en esta clase
abstract class Persona{
    //Atributos
    // si se hereda se pone protected!!!!!!!!
    protected $nombre;
    protected $apellido;
    protected $dniSinLetra;

    //Constructor

    function  __construct($nombre,$apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

   
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
  
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDniSinLetra()
    {
        return $this->dniSinLetra;
    }
  
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }  

    
    public function setDniSinLetra($dniSinLetra)
    {
        $this->dniSinLetra = $dniSinLetra;

        return $this;
    }

    /**
     * Esta funcion recibe un parametro que es $mensaje y devuelve $mensaje
     * 
     * el nombre clave final hace que no se reescriba esta funcion
     */

    public function saludo(String $mensaje):String{
       return "{$mensaje} {$this->getNombre()}";
    }   
    
    // hay que implementar en la clase hijas

    abstract function calcularDni();

}