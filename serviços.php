<?php include "header.php"; ?>
<?php require "conexao.php"; ?>

<?php
function pegarConteudo($pagina, $secao) {
    global $pdo;
    $sql = $pdo->prepare("SELECT conteudo FROM conteudos WHERE pagina=? AND secao=?");
    $sql->execute([$pagina, $secao]);
    return $sql->fetchColumn() ?: "";
}

$textoServicos = pegarConteudo("servicos", "texto");
?>

<h2>Serviços</h2>

<div>
    <?= $textoServicos ?>
</div>

<?php include "footer.php"; ?>
