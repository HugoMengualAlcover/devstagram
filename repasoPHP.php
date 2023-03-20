<?php
include 'includes/header.php';


abstract class Persona {
    public $nombre;
    public $apellidos;

    public function __construct(string $nombre, string $apellidos){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;

        $this->nombrePersona();
    }

    public function nombrePersona()
    {
        echo $this->nombre . " " . $this->apellidos;
    }

}

//Tipado
class Empleado extends Persona{
    public $departamento;
    protected static $empresa;

    public function __construct(string $nombre, string $apellidos, $departamento){
        parent::__construct($nombre, $apellidos);
        $this->nombrePersona();
        $this->departamento=$departamento;
    }

    public function nombrePersona()
    {
        echo $this->nombre . " " . $this->apellidos;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->$nombre = $nombre;
    }

    public static function setEmpresa(string $empresa){
        self::$empresa=$empresa;
    }
    public static function getEmpresa(){
        return self::$empresa;
    }
}




//Constructor property promotion
class PersonaC{
    public function __construct(
        public $nombre,
        public $apellidos
    ){
 }
}

$empleado = new Empleado('Juan', 'Lopez', 'Marcketing');
$empleado2 = new Empleado('Karen', 'Perez','Contabilidad');

Empleado::setEmpresa('Mercadona');
/*$empleado->nombre = "Juan";
$empleado->apellidos = "Lopez";
$empleado->departamento = "Marcketing";*/

echo Empleado::getEmpresa();

$empleado->setNombre("Paco");

echo "<pre>";
var_dump($empleado); //Lo saca por pantalla, pero no hay web en
                    //condiciones para ello aun
echo "</pre>";

$Empleado->nombrePersona();

echo "<pre>";
var_dump($empleado);
echo "</pre>";

//--------------------

class Proovedor extends Persona{
    public $empresa;

    public function __construct($nombre, $apellidos, $empresa)
    {
        parent::__construct($nombre, $apellidos);
        $this->empresa = $empresa;
    }
}

//Comunicar Clases
$nombre = $empleado->getNombre();

$db = new DB($nombre);
$db->guardar();
var_dump($db);