<?php 

declare(strict_types=1); // verificar tipos

// pegando o arquivo que esta o  objeto que contem a conexao
$pdo = require 'connect.php';
// uma qrery sql para lista todos os produtos
//setando o banco e tabela
$sql = "SELECT * FROM `exemplo`.`produtos`";


echo "<h3>Produtos</h3>";
//pdo é o obj, query é um metodo da classe PDO com o parametro, retorno da query $sql, onde a chave sera o valor
foreach($pdo->query($sql) as $key => $value){
  echo 'Id:' . $value['id'] . 'descricao: '. $value['descricao'] . '<hr>';
}
