<?php

    $arquivo = 'texto.txt';
    $conteudo = "Texto qualquer\r\n";
    $tamanhoArquivo = filesize($arquivo);
    $arquivoAberto = fopen($arquivo,'r');
    
    //  Use filesize() para descobrir o tamanho do arquivo.
    //  Use fopen() para abrir ou criar um arquivo.
    //  Use fwrite() para adicionar algum conteúdo ao arquivo já aberto.
    //  feof() retorna true caso a linha lida for o final do arquivo ou false caso não for o final do arquivo.
    //  fgets() retorna a linha de um arquivo. Dentro de um loop retorna todas as linhas.
    //  Use fclose() para fechar o arquivo aberto. Ao fazer isso, o arquivo será obrigatoriamente salvo.
    //  fwrite($arquivoAberto, $conteudo);

    while(!feof($arquivoAberto)){

        $linha = fgets($arquivoAberto, $tamanhoArquivo);
        echo $linha."<br>";

    }

    fclose($arquivoAberto);
?>