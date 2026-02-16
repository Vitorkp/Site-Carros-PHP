<?php
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: ../login.php"); exit; }

require "../conexao.php";
require "../header.php";

$stmt = $pdo->query("SELECT * FROM mensagens ORDER BY id DESC");
$lista = $stmt->fetchAll();
?>

<h2>Mensagens Recebidas</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Mensagem</th>
        <th>Data</th>
    </tr>

    <?php foreach ($lista as $m): ?>
    <tr>
        <td><?= $m['id'] ?></td>
        <td><?= htmlspecialchars($m['nome']) ?></td>
        <td><?= htmlspecialchars($m['email']) ?></td>
        <td><?= htmlspecialchars($m['telefone']) ?></td>
        <td><?= nl2br(htmlspecialchars($m['mensagem'])) ?></td>
        <td><?= $m['enviado_em'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php require "../footer.php"; ?>
