<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/menu2.css">
    <link rel="stylesheet" href="../css/corpo.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/scrpits.js"></script>
    <title>Login</title>
</head>

<body>
    <header>
        <section>
            <nav>
                <div class="topnav" id="myTopnav">
                    <a href="../index.php" class="active"> inicio</a>
                    <a href="Deuses e Divindades.php">Deuses e Divindades</a>
                    <a href="história do mundo.php">História do Mundo</a>
                    <a href="Mapa Interativo.php">Mapa Interativo</a>
                    <a href="Bestiario.php">Bestiário</a>
                    <a href="Politica e Faccoes.php">Política e Facções</a>
                    <a href="Rastreiador de NPCs.php">Rastreiador de NPC</a>
                    <a href="Sociedade.php">Sociedade</a>
                    <a href="javascript:void(0);" style="font-size: 15px;" class="icon" onclick="myFunction()">
                        &#9776;
                    </a>

                </div>
            </nav>
        </section>
    </header>
    <section>
        <div>
            <form action="../php/verificaLogin.php" method="post" id="1">
                <h3>L O G I N</h3>
                <input type="text" name="usuario" placeholder="Seu nome de usuário">
                <input type="password" name="senha" placeholder="sua senha">
                <input type="submit" name="entrar" value="Entrar">
            </form>         
        </div>

        <div>
            <h6>Cadastro de Usuário</h6>
            <form action="../php/cadastrarLogin.php" method="post">
                <label for="nome">Nome:
                <input type="text"  name="nome" required maxlength="50"></label>

                <label for="email">E-mail:
                <input type="email" name="email" required maxlength="40"></label>

                <label for="senha">Senha:
                    <input type="password" id="senha" name="senha" required maxlength="32">
                </label>
        
                <label for="senha2">Confirme a senha:
                    <input type="password" id="senha2" name="senha2" required maxlength="32">
                </label>
        

                <input type="submit" value="Cadastrar" onclick="validarSenha()">
            </form>
        </div>

    </section>

</body>

</html>