<?php

//  time() retorna quantos segundos se passaram desde 1970;
$time = time();
//$time = 999999;

//  Hora/Minuto/Segundo/Mês/Dia/Ano - Define uma data personalizada
//$time = mktime(15,30,00,04,11,2001);

$data = '2023-10-06 13:30:00';
$data = strtotime($data);

date_default_timezone_set('America/Sao_Paulo');

echo date('d')."<br>".date('m')."<br>".date('y')."<br><br>";
echo date('D')."<br>".date('M')."<br>".date('Y')."<br><br>";
echo date('d/m/y')."<br><br>";
echo date('D/M/Y')."<br><br>";
echo date('d/m/y h:i:s')."<br><br>";
echo date('l')."<br><br>";
echo date('d/m/Y', $time)."<br><br>";
echo date('d/m/Y', $data)."<br><br>";
?>