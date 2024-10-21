<?php 

//utilizando classe DateTime para manipulacao de data e hora

$data = new DateTime();

var_dump($data); // retorna  um obj 

//formatacao acessando o metodo format() da classe DataTime

echo $data->format('d-m-y') . PHP_EOL;
// formatando com hora minutos e segundos
echo $data->format('d-m-y H:i:s') . PHP_EOL;

//MANIPULANDO DATAS E HORAS  ATRAVES DO DATEINTERVSL E DATETIME
/*
-> P = representa o periodo:vem antes de dia,mes, ano e semana
Y= ANOS
M= MES
D= DIAS
W=SEMANAS
-> T = representa o tempo: vem antes da hora,minutos,segundo
H=HORA
M=MINUTOS
S=SEGUBTOS
*/
//DIFININDO O INTERVALO
$intervalo = new DateInterval('PT5M');//PT=PERIODO DE TEMPO 5M= 5MINUTOS

//ADICIONANDO A DATA
$data->add($intervalo);
echo $data->format('d-m-Y H:i:s') . PHP_EOL;
//se quize subtrair intervalo use o su
$data->sub($intervalo);
echo $data->format('d-m-Y H:i:s');