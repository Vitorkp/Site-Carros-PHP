<?php require 'header.php'; ?>

<h2>Avaliação do Seu Carro</h2>

<p>Quer usar seu carro usado como entrada? Preencha o formulário abaixo e retornaremos com uma avaliação aproximada.</p>

<form action="#" method="post">
    <label>Marca do Carro:</label><br>
    <input type="text" name="marca" required><br><br>

    <label>Modelo:</label><br>
    <input type="text" name="modelo" required><br><br>

    <label>Ano:</label><br>
    <input type="number" name="ano" required><br><br>

    <label>Quilometragem:</label><br>
    <input type="number" name="km" required><br><br>

    <label>Observações:</label><br>
    <textarea name="obs"></textarea><br><br>

    <button type="submit">Enviar Avaliação</button>
</form>

<?php require 'footer.php'; ?>
