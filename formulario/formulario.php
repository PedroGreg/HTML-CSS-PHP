<?php
    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r('<br>');
        print_r($_POST['email']);
        print_r('<br>');
        print_r($_POST['telefone']);
    }
?>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div id="divForm">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário</b></legend><br>
                <div class="divInput">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div><br>
                <div class="divInput">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div><br>
                <div class="divInput">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label><br><br>
                    <label for="nascimento"><b>Data de nascimento:</b></label>
                    <input type="date" name="nascimento" id="nascimento" class="" required><br><br>
                <div class="divInput">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div><br>
                <div class="divInput">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div><br>
                <div class="divInput">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div><br>
                <input type="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <script src="./script.js"></script>
</body>

</html>