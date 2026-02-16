<?php
require "conexao.php";

$stmt = $pdo->prepare("INSERT INTO mensagens (nome, telefone, email, mensagem)
VALUES (?,?,?,?)");

$stmt->execute([
    $_POST['nome'],
    $_POST['telefone'],
    $_POST['email'],
    $_POST['mensagem']
]);

header("Location: contatos.php?sucesso=1");
exit;
