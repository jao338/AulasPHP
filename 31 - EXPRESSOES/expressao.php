<?php

    

    //  A expressão deve estar dentro de //;
    //  ^ define se a ocorrência acontece no início.
    //  $ define se a ocorrência acontece no final.
    //  Deixar uma expressão entre ^ e $ obriga que o valor comparado seja idêntico a expŕessão regular
    //  [] define um conjunto de caracteres
    //  {} define a quantidade de ocorrências
    //  /i no final do arquivo faz com que a expressão deixe de ser case sensitive
    //  ? ou {0,1} define que o número de ocorrências deve ser igual a nenhuma ocorrência ou no máximo uma ocorrência
    //  * ou {0,} define que o número de ocorrências deve ser igual a nenhuma ou muitas ocorrências
    //  + ou {1,} define que o número de ocorrência deve ser igual a um ou muitas ocorrências
    
    $email = 'contato_123@gmail.com';
    $data = '13/09/2018';
    $padraoEmail = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";
    $padraoData = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/i";

    if(preg_match($padraoEmail, $email) && preg_match($padraoData, $data)){
        echo "Válido - ".$email."<hr>";
        echo "Válido - ".$data;
    }else{
        echo "Inválido - ".$email."<hr>";
        echo "Inválido - ".$data;
    }
    
?>