<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form class="login">

            <h1>Login</h1>
            <label for="emailCadastro">Email:</label>
            <input type="text" id="emailCadastro" name="emailCadastro">

            <label for="senhaCadastro"></label>
            <input type="password" id="senhaCadastro" name="senhaCadastro">

            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            
        </form>

        <?php
            $emailCadastro = @$_POST["emailCadastro"];
            $senhaCadastro = @$_POST["senhaCadastro"]; 
            $emailLogin = @$_POST["emailLogin"];
            $senhaLogin = @$_POST["senhaLogin"];

            echo $emailCadastro;
            echo $senhaCadastro;
            echo $emailLogin;
            echo $senhaLogin;
        ?>
    </main>

    
</body>
</html>