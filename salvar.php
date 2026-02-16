<?php
$conn = new mysqli("localhost", "root", "", "estudo_prova");

$pagina = $_POST["pagina"];
$secao = $_POST["secao"];
$conteudo = $_POST["conteudo"];

$stmt = $conn->prepare("
    INSERT INTO conteudos (pagina, secao, conteudo)
    VALUES (?, ?, ?)
    ON DUPLICATE KEY UPDATE conteudo = VALUES(conteudo)
");

$stmt->bind_param("sss", $pagina, $secao, $conteudo);
$stmt->execute();

echo "<h3>Conteúdo salvo com sucesso!</h3>";
echo "<a href='editar.php'>Voltar</a>";
?>
