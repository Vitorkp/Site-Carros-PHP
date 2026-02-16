<?php include "header.php"; ?>

<h2>Contatos</h2>

<form method="POST" action="enviado.php">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mensagem:</label><br>
    <textarea name="mensagem" required></textarea><br><br>

    <button type="submit">Enviar</button>
</form>

<?php include "footer.php"; ?>
