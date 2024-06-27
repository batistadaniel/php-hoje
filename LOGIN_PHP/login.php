<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - PHP 2 - parte 2- Login</title>
</head>
<body>
    <main>
        <form action="logado.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">

            <a href="http://google.com"><input type="submit" value="Entrar"></a>  

            <input type="reset" value="Limpar">

            <a href="index.php">Voltar</a>
        </form>

        <form action="" method="post"></form>
    </main>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - PHP 2 - parte 2- Login</title>
</head>
<body>
    <main>
        <form action="logado.php" method="post">

            <h1>Login</h1>
            <label for="emailLogin">Email:</label>
            <input type="email" name="emailLogin" id="emailLogin">

            <label for="senhaLogin">Senha:</label>
            <input type="password" name="senhaLogin" id="senhaLogin">

            <!-- <a href="http://google.com"><input type="submit" value="Entrar">Entrar</a>   -->
            <input type="submit" value="Entrar">
            <input type="reset" value="Limpar">

            <!-- <a href="index.php">Voltar</a> -->
            <!-- <?php

    
                $emailCadastro = $_POST["emailCadastro"];
                $senhaCadastro = $_POST["senhaCadastro"]; 

                echo $emailCadastro;
                echo $senhaCadastro;
                
            ?> -->
        </form>


    </main>

    
</body>
</html>