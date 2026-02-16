<?php include "header.php"; ?>
<?php require "conexao.php"; ?>

<?php
function pegarConteudo($pagina, $secao) {
    global $pdo;
    $sql = $pdo->prepare("SELECT conteudo FROM conteudos WHERE pagina=? AND secao=?");
    $sql->execute([$pagina, $secao]);
    return $sql->fetchColumn() ?: "";
}

$textoSobre = pegarConteudo("sobre", "texto");
?>

<h2>Sobre a VJ Motors</h2>

<div>
    <?= $textoSobre ?>
</div>

<?php include "footer.php"; ?>
