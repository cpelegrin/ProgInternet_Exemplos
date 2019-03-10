<?php 
class Preferencias 
{ 
    private $data; 
    private static $instance; 
    
    // Observe que o construtor é privado
    private function __construct() 
    { // para mais informações: http://php.net/manual/pt_BR/function.parse-ini-file.php 
        $this->data = parse_ini_file('application.ini'); 
    } 
    
    // O método garante que seja criado uma instância da classe ou 
    // que seja retornada a instância já criada
    public static function getInstance() 
    { 
        if (empty(self::$instance)) { 
            self::$instance = new self; 
        } 
        return self::$instance; 
    } 
    
    // Métodos quaisquer da classe
    public function setData($key, $value) 
    { 
        $this->data[$key] = $value; 
    } 
    
    public function getData($key) 
    { 
        return $this->data[$key]; 
    } 
    
    public function save() 
    { 
        $string  = ''; 
        if ($this->data) { 
            foreach ($this->data as $key => $value) { 
                $string .= "{$key} = \"{$value}\" \n"; 
            } 
        } 
        file_put_contents('application.ini', $string); 
    } 
}

