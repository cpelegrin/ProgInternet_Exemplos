<?php 
require_once ("Conta.php");
final class ContaPoupanca extends Conta 
{ 
    function retirar($quantia) 
    { 
        if ($this->saldo >= $quantia) { 
            $this->saldo -= $quantia; 
        } 
        else { 
            return false; // retirada não permitida 
        }
        return true; // retirada permitida 
    } 
    //function depositar(){} // método final vai gerar erro.
    function transferir ($conta, $quantia){
        if($this->retirar($quantia)){
            $conta->depositar($quantia);
        }
    }
}

?>