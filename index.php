<?php include "header.php"; ?>
<?php require "conexao.php"; ?>

<?php
function pegarConteudo($pagina, $secao) {
    global $pdo;
    $sql = $pdo->prepare("SELECT conteudo FROM conteudos WHERE pagina=? AND secao=?");
    $sql->execute([$pagina, $secao]);
    return $sql->fetchColumn() ?: "";
}

$hero       = pegarConteudo("home", "hero");
$destaques  = pegarConteudo("home", "destaques");
?>

<link rel="stylesheet" href="css/index.css">

<div class="hero">
    <div class="hero-content">
        <?= $hero ?>
    </div>
</div>

<section class="section">
    <h2>Carros em Destaque</h2>
    <div class="cards-container">
        <?= $destaques ?>
    </div>
</section>

<?php include "footer.php"; ?>
