<?php include 'header.php'; ?>
<h2>Login</h2>
<form action="process_login.php" method="post">
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>
    <button type="submit">Entrar</button>
</form>
<?php include 'footer.php'; ?>
