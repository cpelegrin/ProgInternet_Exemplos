<?php 
require_once 'preferencias.php'; 

// obtém uma instância 
$p1 = Preferencias::getInstance(); 
print 'A linguagem é: '. $p1->getData('language') . "<br>\n"; 
$p1->setData('language', 'pt'); 
print 'A linguagem é: '. $p1->getData('language') . "<br>\n"; 

// obtém a mesma instância 
$p2 = Preferencias::getInstance(); 
print 'A linguagem é: '. $p2->getData('language') . "<br>\n"; 
$p2->setData('language', 'qualquer'); 
// Descomentar para gravar o valor
 $p1->save();

$p3 = Preferencias::getInstance(); 
print 'A linguagem é: '. $p3->getData('language') . "<br>\n";

print_r($p3) ;