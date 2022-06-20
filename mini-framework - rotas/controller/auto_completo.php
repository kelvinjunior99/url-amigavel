<?php  

require "conexao.php";

$dados_banco = $pdo->query("SELECT nome FROM palavras");

echo json_encode($dados_banco->fetchAll(PDO::FETCH_ASSOC));
?>