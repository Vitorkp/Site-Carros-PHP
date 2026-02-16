<?php
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: ../login.php"); exit; }

require "../conexao.php";
require "../header.php";

$stmt = $pdo->query("SELECT * FROM usuarios ORDER BY id DESC");
$usuarios = $stmt->fetchAll();
?>

<h2>Usuários Cadastrados</h2>
<a href="cadastrar_usuario.php">+ Novo Usuário</a><br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Foto</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Ações</th>
</tr>

<?php foreach ($usuarios as $u): ?>
<tr>
    <td><?= $u['id'] ?></td>

    <td>
        <?php if ($u['foto']): ?>
            <img src="../uploads/<?= $u['foto'] ?>" width="50">
        <?php else: ?>
            Sem foto
        <?php endif; ?>
    </td>

    <td><?= htmlspecialchars($u['nome']) ?></td>
    <td><?= htmlspecialchars($u['email']) ?></td>
    <td><?= htmlspecialchars($u['telefone']) ?></td>

    <td>
        <a href="editar_usuario.php?id=<?= $u['id'] ?>">Editar</a> |
        <a href="delete_usuario.php?id=<?= $u['id'] ?>" onclick="return confirm('Excluir usuário?')">Excluir</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?php require "../footer.php"; ?>
