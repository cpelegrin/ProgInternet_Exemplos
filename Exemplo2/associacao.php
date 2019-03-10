<?php 
require_once 'classes/fabricante.php'; //importando arquivos necessários
require_once 'classes/produto.php'; 

// criação dos objetos 
$p1 = new Produto('Chocolate', 10, 7); 
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '1234985235'); 

// asociação 
$p1->setFabricante( $f1 ); 
print 'A descrição é ' . $p1->getDescricao() . "<br>\n"; 
print 'O fabricante é ' . $p1->getFabricante()->getNome() . "<br>\n";

