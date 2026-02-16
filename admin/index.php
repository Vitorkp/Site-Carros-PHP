<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit;
}
require '../header.php';
?>
<h2>Painel Administrativo</h2>
<p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['user_nome']); ?> (<?php echo htmlspecialchars($_SESSION['user_email']); ?>)</p>

<ul>
    <li><a href="usuarios.php">Gerenciar Usuários</a></li>
    <li><a href="conteudos.php">Editar Conteúdos do Site</a></li>
    <li><a href="mensagens.php">Mensagens do Contato</a></li>
</ul>

<?php require '../footer.php'; ?>
