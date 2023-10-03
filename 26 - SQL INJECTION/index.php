<?

    // Include e require servem para importar conteúdos de um arquivo php para outro
    //  Caso o require não encontre o arquivo solicitado, a execução do programa é interrompida
    //  Caso o incluede não encontre o arquivo solicitado, a execução do programa não é interrompida

    require 'header.php';
    require_once 'header.php';

    echo 'Olá, mundo!';    

    include 'footer.php';
    include_once 'footer.php';
    
    // Tanto require_once e include_once importam o arquivo desejado apenas se o arquivo ainda não foi importado anteriormente, caso ja tenha sido, nada acontece
?>


