<?php

try{
$pdo = new pdo("mysql:host=localhost;dbname=Sorteio","root","2473");
}catch(PODExceptio $e){
    echo $e->getMessage();
    exit();
}

?>
