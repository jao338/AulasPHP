<?php

setcookie('user','João Henrique', time()+3600);
setcookie('email','joaohenriquerc123@gmail.com', time()+3600);
setcookie('ultima_pesquisa','Porque "tudo junto" se escreve separado e "separado" se escreve tudo junto', time()+3600);

//  Apaga o cookie
//setcookie('ultima_pesquisa','Porque "tudo junto" se escreve separado e "separado" se escreve tudo junto', time()-3600);

var_dump($_COOKIE);

echo "<br><br>Cookie ultima_pesquia: ".$_COOKIE['ultima_pesquisa'];


?>