<?php
    $nome=$_GET["nome"];
    $sexo=$_GET["sexo"];
    $idade=$_GET["idade"];
    if($sexo == "feminino" and $idade<18){
        echo "<h1>$nome, acesso proibido</h1>";
    }
    elseif($sexo == "feminino" and $idade>=18){
        echo "<h1>$nome, acesso permitido</h1>";
    }
    elseif ($sexo == "masculino" and $idade<18) {
        echo "<h1>$nome, acesso permitido</h1>";
    }
    else{
        echo "<h1>$nome, acesso permitido</h1>";
    }

