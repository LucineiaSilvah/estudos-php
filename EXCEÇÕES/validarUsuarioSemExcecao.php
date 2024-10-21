<?php 

function validarUsuario(array $usuario){
   //verificacao se os campo do array tem algum vazio

   if(empty($usuario['id']) || empty($usuario['nome']) || empty($usuario['idade'])){
    return false; // se tiver algum desses campos vazio o retorno da validacao é falso
   }
  // se nao cair no falso é automaticamente usiario valido e retorna verdadeiro
  return true;
}

$usuario =[
  'id'=>1,
  'nome'=> '',
  'idade'=> 32,
];

//chamando a funcao e guardando o retorno dentro de uma variavel 
$usuarioValido = validarUsuario($usuario);

//fazendo tratamento se o usuario nao for valido

if(!$usuarioValido){
  echo "usuario invalido";
  return false;
}