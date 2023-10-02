<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula022 - Sessions</title>
</head>
<body>

<?php
    //  Todo arquivo que use uma session necessita da chamada da função 'session_start()
    // 'session_unset()' limpa a session 'zerando' a varíavel superglobal '$_SESSION';
    //  'session_destroy()' destrói a session

    session_start();
    session_unset();
    session_destroy();

?>
</body>
</html>