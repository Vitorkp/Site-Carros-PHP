<?php
session_start();
if (!isset($_SESSION['user_id'])) { header('Location: ../login.php'); exit; }
require '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha_hash, telefone) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nome, $email, $senha_hash, $telefone]);
    header('Location: usuarios.php?sucesso=1');
    exit;
}
?>
<!-- Formulário HTML (colocar dentro do include header/footer) -->
<form method="post" action="">
    <input name="nome" required>
    <input name="email" type="email" required>
    <input name="telefone">
    <input name="senha" type="password" required>
    <button type="submit">Cadastrar</button>
</form>
