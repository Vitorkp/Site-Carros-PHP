<?php
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: ../login.php"); exit; }

require "../conexao.php";

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id=?");
$stmt->execute([$id]);
$usuario = $stmt->fetch();

if (!$usuario) { die("Usuário não encontrado."); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Foto
    $foto = $usuario['foto'];
    if (!empty($_FILES['foto']['name'])) {
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $novoNome = uniqid().".$ext";
        move_uploaded_file($_FILES['foto']['tmp_name'], "../uploads/".$novoNome);
        $foto = $novoNome;
    }

    // Senha
    if (!empty($_POST['senha'])) {
        $senha_hash = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET nome=?, email=?, telefone=?, foto=?, senha_hash=? WHERE id=?";
        $pdo->prepare($sql)->execute([$nome, $email, $telefone, $foto, $senha_hash, $id]);
    } else {
        $sql = "UPDATE usuarios SET nome=?, email=?, telefone=?, foto=? WHERE id=?";
        $pdo->prepare($sql)->execute([$nome, $email, $telefone, $foto, $id]);
    }

    header("Location: usuarios.php");
    exit;
}

require "../header.php";
?>

<h2>Editar Usuário</h2>

<form method="post" enctype="multipart/form-data">
    Nome:<br>
    <input name="nome" value="<?= $usuario['nome'] ?>"><br><br>

    Email:<br>
    <input name="email" value="<?= $usuario['email'] ?>"><br><br>

    Telefone:<br>
    <input name="telefone" value="<?= $usuario['telefone'] ?>"><br><br>

    Senha (opcional):<br>
    <input type="password" name="senha"><br><br>

    Foto:<br>
    <?php if($usuario['foto']): ?>
        <img src="../uploads/<?= $usuario['foto'] ?>" width="60"><br>
    <?php endif; ?>
    <input type="file" name="foto"><br><br>

    <button type="submit">Salvar</button>
</form>

<?php require "../footer.php"; ?>
