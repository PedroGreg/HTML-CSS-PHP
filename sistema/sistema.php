<?php
session_start();
// print_r($_SESSION);
if ((isset($_SESSION['email'])) && (isset($_SESSION['senha']))) {

    $logado = $_SESSION['email'];

} else {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../login/login.php');

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema</title>
</head>

<body>
    <header>
        <button id="logOut">Sair</button>
    </header>
    <h1>Acesso concluido</h1>
    <?php
    echo "Bem vindo $logado";
    ?>
    <script src="sistema.js"></script>
</body>

</html>