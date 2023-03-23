<?php
class Jugador {
    public $nombre ;
    public $edad;
    public $posicion; //enum recomendacion
    public $golesAnotados;
    public $faltasRecibidas;
    public $faltasCometidas;

    public function __construct($nombre, $edad, $posicion, $golesAnotados, $faltasRecibidas,
                             $faltasCometidas)
    {
     $this->nombre = $nombre;
     $this->edad = $edad;
     $this->posicion = $posicion;
     $this->golesAnotados = $golesAnotados;
     $this->faltasRecibidas = $faltasRecibidas;
     $this->faltasCometidas = $faltasCometidas;
    }

    
    public function mostrarJugador(){
    return print( "Jugador: " . $this->nombre . "<br>" . "Edad: " .  $this->edad . "<br>" .
         "Posicion: " . $this->posicion . "<br> " .
         "Goles Anotados: " .  $this->golesAnotados . "<br>" . 
         "Faltas Recibidas: " . $this->faltasRecibidas . "<br>" .
         "Faltas Cometidas: " . $this->faltasCometidas . "<br> <hr>");
    }
}

//instanciamos jugadores
$ArrayJugadores = array();
$jugador1 = new Jugador('barrigaldo',25,"defensa",2,6,9);
$jugador1-> mostrarJugador();
$ArrayJugadores[]=$jugador1;
$jugador2 = new Jugador("tronquiño",35,"delantero",8,9,5);
$jugador2-> mostrarJugador();
$ArrayJugadores[]=$jugador2;
$jugador3 = new Jugador("estafiña",41,"portero",15,2,6);
$jugador3-> mostrarJugador();
$ArrayJugadores[]=$jugador3;
$jugador4 = new Jugador("penaldo",28,"delantero",13,3,7);
$jugador4-> mostrarJugador();
$ArrayJugadores[]=$jugador4;
$jugador5 = new Jugador("calvessi",33,"centrocampista",3,5,8);
$jugador5-> mostrarJugador();
$ArrayJugadores[]=$jugador5;


class Equipo{
    private  $jugadores = array();

    public function __construct($jugadores){
        $this->jugadores = $jugadores;
        
    }
    public function getJugadores(){
        return $this->jugadores;
    }
    public function setJugadores($jugadores){
        $this->jugadores = $jugadores;
    }


    
    public function masGoles(){
            $golesAnotados = array_column(array_values($this->jugadores), 'golesAnotados');
            $jug = array_column(array_values($this->jugadores), 'nombre');
            for($i = 0;$i < count($this->jugadores)-1;$i++){
                if(max($golesAnotados) == $golesAnotados[$i]){
                    print_r($jug[$i] . " es el que más Goles anotó con " .$golesAnotados[$i] . " Goles. <br>"); 
                }

            }
    }
    public function menosFaltas(){
        $faltasCometidas = array_column(array_values($this->jugadores), 'faltasCometidas');
        $jug = array_column(array_values($this->jugadores), 'nombre');
        for($i = 0;$i < count($this->jugadores)-1;$i++){
            if(min($faltasCometidas) == $faltasCometidas[$i]){
            print_r($jug[$i] . " es el que menos faltas realizo con " .$faltasCometidas[$i] . " faltas .<br>");
            }
        }
    
     }
}
$losMataos = new Equipo($ArrayJugadores);
$losMataos->masGoles();
$losMataos->menosFaltas();





?>