<?php 
//para tratamento de excecoes usamod TRY{ }CATCH(){}FINILY{}

function validarUsuario(array $usuario){
   //verificacao se os campo do array tem algum vazio

   if(empty($usuario['id']) || empty($usuario['nome']) || empty($usuario['idade'])){
     throw new Exception('campos obrigatorios estao vazios!');// se tiver algum desses campos vazio lanca uma exacao com uma mensagem e interompe o resto do codigo
   }
  // se nao cair no falso é automaticamente usiario valido e retorna verdadeiro
  return true;
}

$usuario =[
  'id'=>1,
  'nome'=> 'katia',
  'idade'=>'',
];

//TRATANDO O RETORNO DA EXCECAO
//TRY = FAZ UMA TENTATIVA
$status = false;

try{

  $status = validarUsuario($usuario);

}catch(Exception $e)//aqui pega o erro caso nao passe no try esse e é o throw la de cima
{
  echo $e->getMessage(); // aqui vai retorna apenas a mensagem do throw
/// se nao tiver finily o die é aqui  die(); //enserando o resto do codigo por aqui
}finally{
  //sera executado indementendo do renorno
  echo 'Status: ' . (int)$status; //cast

  //se tem finily o die é aqui
  die();
}