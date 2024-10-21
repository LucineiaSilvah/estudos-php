<?php 

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
  'nome'=> '',
  'idade'=> 32,
];

//com o lancamento da excecao nao precisa da outras vevificacoes somente chamar a funcao

validarUsuario($usuario);
