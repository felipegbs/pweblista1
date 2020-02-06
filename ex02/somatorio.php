<?php
    $primeironumero=$_GET["primeiro"];
    $segundonumero=$_GET["segundo"];
    $soma = $primeironumero+$segundonumero;
    if($soma>20){
        $soma=$soma+8;
        echo "<h1>$soma!</h1>";    
    }
    else{
        $soma=$soma-5;
        echo "<h1>$soma!</h1>";
    }
    