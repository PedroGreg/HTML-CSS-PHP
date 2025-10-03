<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // print_r($_REQUEST);
    include_once('../formulario/config.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r($email);
    // print_r('<br>');
    // print_r($senha);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    // print_r($sql);
    // print_r('<br>');
    // print_r($result);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../sistema/sistema.php');
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

} else {
    header('Location: login.php');
}
?>