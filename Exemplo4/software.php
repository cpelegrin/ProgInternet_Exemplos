<?php 
class Software 
{ 
    private $id; 
    private $nome; 
    public static $contador; 
    
    function __construct($nome) 
    { 
        self::$contador++; 
        $this->id   = self::$contador; 
        $this->nome = $nome; 
        print "Software {$this->id} - {$this->nome} <br>\n"; 
    } 
    
    public static function getContador() 
    { 
        return self::$contador; 
    } 
} 

Software::$contador = 10;
// cria novos objetos 
new Software('Dia'); 
new Software('Gimp'); 
new Software('Gnumeric'); 

echo 'Quantidade criada = ' . Software::getContador();

