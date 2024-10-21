<?php 
/* crie uma data com a classe datetime com a data e horas atuais. em seguida subtraia 5 dias ,10 horas e 50 minutos dessa data e exiba o resutado no seginte formato: 
dia/mes/ano - hora:minutos : segundos

  */
$dataAtual = new DateTime();

echo $dataAtual->format('d/m/Y - H:m:s') . PHP_EOL;

$intervalo = new DateInterval('P5DT10H50M');

$dataAtual->sub($intervalo);
echo $dataAtual->format('d/m/Y - H:m:s') . PHP_EOL;