<?php
    $numero=$_GET["numero"];
    if($numero%10 == 0){
        echo "O numero é divisivel por 10";
    }
    elseif($numero%5 == 0){
        echo "O numero é divisivel por 5";
    }
    elseif($numero%2 == 0){
        echo "O numero é divisivel por 2";
    }
    else{
        echo "Esse numero não é divisivel nem por 10, nem por 5 e nem por 2, sinto muito!";
    }