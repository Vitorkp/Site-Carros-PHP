<?php
$conn = new mysqli("localhost", "root", "", "estudo_prova");

$pagina = $_GET["pagina"] ?? "Home";
$secao = $_GET["secao"] ?? "Texto";

$stmt = $conn->prepare("SELECT conteudo FROM conteudos WHERE pagina = ? AND secao = ?");
$stmt->bind_param("ss", $pagina, $secao);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$conteudo_atual = $row["conteudo"] ?? "";
?>

<h2>Editar Conteúdos do Site</h2>

<form action="salvar.php" method="POST">

    <label>Página:</label>
    <select name="pagina">
        <option <?= $pagina == "Home" ? "selected" : "" ?>>Home</option>
        <option <?= $pagina == "Sobre" ? "selected" : "" ?>>Sobre</option>
        <option <?= $pagina == "Serviços" ? "selected" : "" ?>>Serviços</option>
    </select>

    <br><br>

    <label>Seção:</label>
    <select name="secao">
        <option <?= $secao == "Texto" ? "selected" : "" ?>>Texto</option>
        <option <?= $secao == "Imagem" ? "selected" : "" ?>>Imagem</option>
        <option <?= $secao == "Título" ? "selected" : "" ?>>Título</option>
    </select>

    <br><br>

    <label>Conteúdo:</label><br>
    <textarea name="conteudo" rows="8" cols="60"><?= htmlspecialchars($conteudo_atual) ?></textarea>

    <br><br>
    <button type="submit">Salvar</button>

</form>
