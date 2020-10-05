<?php

include '../Model/persona.php';
include '../Model/alumnos.php';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];

// llamamos la clase padre

$persona1 = new Persona($nombre,$apellido);
echo "{$persona1->getNombre()} <br>";
echo "{$persona1->getApellido()} <br>";
$persona1->saludo('hola estamos en persona');

$persona2 = new Persona('Pepe','Jimenez');
$persona1->setDniSinLetra($dni);

// llamamos la clase hijo

$alumno1 = new Alumnes((string)$nombre,(string)$apellido , '2456');
$mensaje = $alumno1->saludo('hola, esta funcion esta hecha por:');
echo $mensaje;