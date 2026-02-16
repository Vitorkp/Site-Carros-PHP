<?php
session_start();
if (!isset($_SESSION['user_id'])) { header("Location: ../login.php"); exit; }
require "../conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pagina = $_POST['pagina'];
    $secao = $_POST['secao'];
    $conteudo = $_POST['conteudo'];

    $existe = $pdo->prepare("SELECT id FROM conteudos WHERE pagina=? AND secao=?");
    $existe->execute([$pagina, $secao]);

    if ($existe->rowCount() > 0) {
        $stmt = $pdo->prepare("UPDATE conteudos SET conteudo=? WHERE pagina=? AND secao=?");
        $stmt->execute([$conteudo, $pagina, $secao]);
    } else {
        $stmt = $pdo->prepare("INSERT INTO conteudos (pagina, secao, conteudo) VALUES (?, ?, ?)");
        $stmt->execute([$pagina, $secao, $conteudo]);
    }
}

require "../header.php";
?>

<h2>Editar Conteúdos do Site</h2>

<form method="post">
    Página:
    <select name="pagina">
        <option value="home">Home</option>
        <option value="sobre">Sobre</option>
        <option value="servicos">Serviços</option>
    </select><br><br>

    Seção:
    <select name="secao">
        <option value="hero">Hero</option>
        <option value="texto">Texto</option>
        <option value="destaques">Destaques</option>
    </select><br><br>

    Conteúdo:<br>
    <textarea name="conteudo" rows="6" cols="60"></textarea><br><br>

    <button type="submit">Salvar</button>
</form>

<?php require "../footer.php"; ?>
