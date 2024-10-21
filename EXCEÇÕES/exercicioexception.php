<?php 
/*crie uma funcao chamada divisao que devera receber dois numeros. na funcao , verifique se algum dos numeros passados por parametro é igual a 0, caso positivo ,lance uma excecao
em seguida,escreva um algoritmo resposnsavel ppor executar a fincao divicao forcando-a lancar a ecxcecao passando zero em algum parametro e realiza otratamento e captura atravez do try catch

*/

function divisao($n1,$n2)
{
  if($n1 === 0 || $n2 === 0){
    throw new Exception('numero nao pode ser igual a zero!');
  }
  return true;
}


$result = false;

//tratando a excecao
try{
  $result = divisao(2,0);//forcando erro
}catch(Exception $e){
  echo $e->getMessage();
}finally{
  echo (int)$result;
}
