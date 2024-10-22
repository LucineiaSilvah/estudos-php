<?php
/*
CRUD
 conexao !
 listagem
 inserçao
 edicao
 exclusao

*/
 declare(strict_types=1); // forca tipagem

$pdo = null; // objeto inicia nulo

try{

  //CRIO UMA INSTANCIA DA CLASSE PDO PARA UTILIZAR SEUS METODOS padrao
  $pdo = new PDO('mysql:host=localhost;dbname:','root','');
  
  //COMO PARAMETRO VAI OS DADOS DE CONExAO DO BANCO
}catch(Exception $e){
  echo $e->getMessage();
  die();
}
//retorna o objeto
return $pdo;