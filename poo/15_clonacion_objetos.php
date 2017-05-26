<?php 
class Persona { 
    public $nombre; 
    public function __construct( $nom ){ 
        $this->nombre = $nom; 
    } 
    public function esto(){ 
        print("su nombre es: " . $this->nombre) ; 
    } 
} 
$persona = new Persona( 'Juan' ); 
$persona2 = clone($persona);
$persona2->esto(); 