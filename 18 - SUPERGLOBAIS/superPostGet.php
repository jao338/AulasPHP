<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula018 - Superglobais</title>
</head>
<body>
    <div style="display:flex">
        <div style="display:flex; flex: 1;">
            <form action="./forms/post.php" method="POST">

                <p>Usando POST</p>

                <div>Name:</div>
                <input type="text" name="nomePOST">

                <div>Email:</div>
                <input type="email" name="emailPOST">

                <input type="submit" name="Enviar">

            </form>
        </div>

        <div style="display:flex; flex: 1;">
            <form action="./forms/get.php" method="GET">

                <p>Usando GET</p>

                <div>Name:</div>
                <input type="text" name="nomeGET">

                <div>Email:</div>
                <input type="email" name="emailGET">

                <input type="submit" name="Enviar">

            </form>

            <!-- <a href="./forms/get.php?sobrenome=Henrique&idade=22">Enviar dados</a>-->

        </div>

        
    </div>
    
</body>
</html>