<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>

<body>
    <a href="../home/home.php">voltar</a>
    <div id="div-login">
        <h1>Login</h1><br>
        <form action="./testeLogin.php" method="post">
            <input type="text" placeholder="Email" name="email" required><br><br>
            <input type="password" placeholder="Senha" name="senha" required><br><br>
            <button type="submit" value="Enviar" name="submit">Enviar</button>
        </form>
    </div>
    <script src="./script.js"></script>
</body>

</html>