<?php 
require_once ("Conta.php");
class ContaCorrente extends Conta 
{ 
    protected $limite; 
    
    public function __construct($agencia, $conta, $saldo, $limite) 
    { 
        parent::__construct($agencia, $conta, $saldo); 
        $this->limite = $limite; 
    } 
    
    function retirar($quantia) 
    { 
        if ( ($this->saldo + $this->limite) >= $quantia ) { 
            $this->saldo -= $quantia; // retirada permitida 
        } 
        else { 
            return false; // retirada não permitida 
        } 
        return true; 
    } 

    function transferir ($conta, $quantia){
        if($this->retirar($quantia)){
            $conta->depositar($quantia);
        }
    }
}

?>