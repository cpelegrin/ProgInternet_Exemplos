<?php
//Declarando Classe
class Produto 
{
  private $codigo;
  private $descricao;
  private $preco;
  private $quantidade;

  //método
  public function ImprimeEtiqueta($parametro)
  {
    print 'Código:    ' . $this->codigo . "<br>\n";
    print 'Descrição: ' . $this->descricao . "<br>\n";
    print "Parametro: $parametro<br>";
  }

  //construtor com parâmetros
  function __construct($Codigo, $Descricao, $Quantidade, $Preco)
  {
    $this->codigo    = $Codigo;
    $this->descricao = $Descricao;
    $this->quantidade= $Quantidade;
    $this->preco     = $Preco;
  }

  //get e set com métodos mágicos
  function  __set($atrib, $value){
    $this->$atrib = $value;
  }

  public function  __get($atrib){
    return $this->$atrib;
  }
}

//Execução de código utilizando classe
//criando objeto produto
$produto = new Produto(1,"produto 1", 10, "R$20,00");
echo "$produto->codigo<br>"; // utilizando objeto criado, acessando um atributo
$produto->codigo = 0; // atribuindo valor
$produto->descricao = "qualquer texto"; 

$produto->ImprimeEtiqueta(1234); // acessando método
echo '<br><br>';
?>


<?php
//Declarando Classe
class Pessoa {
  private $nome;
  private $sobrenome;

  function  __set($atrib, $value){
    $this->$atrib = $value;
  }

  public function  __get($atrib){
    return $this->$atrib;
  }
}


$Pessoa = new Pessoa();
$Pessoa->nome = 'Carlos'; // utilizando métodos set
$Pessoa->sobrenome = 'Pelegrin';

echo 'Nome: ' . $Pessoa->nome . '<br />'; // utilizando métodos get
echo 'Sobrenome: ' . $Pessoa->sobrenome;


