<?php
    // ifs podem funcionar dentro de ifs


    $escopo1 = 10;
    if(10 > 2){
        echo 'Entrou no primeiro if <br>';
        $escopo2 = 20;
        
        if('teste' == 'teste'){
            echo 'Entrou no segundo if <br>';
            echo "$escopo1 <br>";
        }
        else{
            echo 'Não entrou no segundo if <br>';
            echo "$escopo2 <br>";
        }
    }
    else{
        echo 'Não entrou no primeiro if <br>';
    }

    // Apesar de poder usar operadores lógicos para deixar tudo em 1 if só, existem casos que é necessário usar o if aninhado