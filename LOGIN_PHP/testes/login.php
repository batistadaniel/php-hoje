<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="inicio.php" method="post" class="cadastro">

            <h1>Cadastre-se</h1>
            <label for="emailCadastro">Email:</label>
            <input type="text" id="emailCadastro" name="emailCadastro">

            <label for="senhaCadastro"></label>
            <input type="password" id="senhaCadastro" name="senhaCadastro">

            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            
        </form>
    </main>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <!-- Formulário de Cadastro -->
        <form action="inicio.php" method="post" class="cadastro">
            <h1>Cadastre-se</h1>
            <label for="emailCadastro">Email:</label>
            <input type="text" id="emailCadastro" name="emailCadastro">

            <label for="senhaCadastro">Senha:</label>
            <input type="password" id="senhaCadastro" name="senhaCadastro">

            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>

        <!-- Formulário de Login -->
        <form action="inicio.php" method="post" class="login">
            <h1>Login</h1>
            <label for="emailLogin">Email:</label>
            <input type="text" id="emailLogin" name="emailLogin">

            <label for="senhaLogin">Senha:</label>
            <input type="password" id="senhaLogin" name="senhaLogin">

            <input type="submit" value="Entrar">
            <input type="reset" value="Limpar">
        </form>

        <?php
            // Captura e exibe os dados postados
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["emailCadastro"]) && isset($_POST["senhaCadastro"])) {
                    $emailCadastro = $_POST["emailCadastro"];
                    $senhaCadastro = $_POST["senhaCadastro"];
                    echo "Email de Cadastro: " . htmlspecialchars($emailCadastro) . "<br>";
                    echo "Senha de Cadastro: " . htmlspecialchars($senhaCadastro) . "<br>";
                }

                if (isset($_POST["emailLogin"]) && isset($_POST["senhaLogin"])) {
                    $emailLogin = $_POST["emailLogin"];
                    $senhaLogin = $_POST["senhaLogin"];
                    echo "Email de Login: " . htmlspecialchars($emailLogin) . "<br>";
                    echo "Senha de Login: " . htmlspecialchars($senhaLogin) . "<br>";
                }
            }
        ?>
    </main>
</body>
</html>
