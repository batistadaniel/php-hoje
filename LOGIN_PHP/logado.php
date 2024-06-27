<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <div class="formulario">
        <?php
            $email = @$_POST["email"];
            $senha = @$_POST["senha"];
        ?>
    </div>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <div class="formulario">
        <?php
            $emailCadastro = $_POST["emailCadastro"];
            $senhaCadastro = $_POST["senhaCadastro"]; 
            $emailLogin = $_POST["emailLogin"];
            $senhaLogin = $_POST["senhaLogin"];
    
            if ($emailCadastro == $emailLogin && $senhaCadastro == $senhaLogin):
                echo "Login efetuado com sucesso!";
            else:
                echo "Email ou senha incorretos!";
            endif;

            echo "ok";
        ?>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <div class="formulario">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $emailCadastro = isset($_POST["emailCadastro"]) ? $_POST["emailCadastro"] : '';
                $senhaCadastro = isset($_POST["senhaCadastro"]) ? $_POST["senhaCadastro"] : '';
                $emailLogin = isset($_POST["emailLogin"]) ? $_POST["emailLogin"] : '';
                $senhaLogin = isset($_POST["senhaLogin"]) ? $_POST["senhaLogin"] : '';

                if (!empty($emailCadastro) && !empty($senhaCadastro)) {
                    echo "Cadastro realizado com sucesso!<br>";
                    echo "Email: " . htmlspecialchars($emailCadastro) . "<br>";
                    echo "Senha: " . htmlspecialchars($senhaCadastro) . "<br>";
                }

                if ($emailCadastro == $emailLogin && $senhaCadastro == $senhaLogin) {
                    echo "Login efetuado com sucesso!";
                } else {
                    echo "Email ou senha incorretos!";
                }
            }
        ?>
    </div>
</body>
</html>

