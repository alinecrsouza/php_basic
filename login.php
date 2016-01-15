<?php
    session_start();
    include_once "header.php";
?>
<body>
    <main>
        <form action="login.php" method="post">
            <fieldset>
                <legend>Login</legend>
                <label>Usuário<input type="text" name="login"</label>
                <label>Senha<input type="password" name="senha"</label>
            </fieldset>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <?php
            if(isset($_POST['login']) AND isset($_POST['senha'])){
                include_once "users.php";
                for($i=0; $i<count($usuario); $i++){
                    if ($_POST['login'] == $usuario[$i]['login'] AND $_POST['senha'] == $usuario[$i]['senha']) {
                        $_SESSION['logado'] = true;
                        header("Location: index.php");
                    }
                }
                if(!isset($_SESSION['logado'])){
                    echo "Nome de usuario e/ou Senha incorreto(s).\n";
                    print "<br> <a href='login.php'>Tentar Novamente</a> OU <a href='index.php'>Modo Publico</a>";
                }
            }

        ?>
    </main>
    <?php include_once "footer.php"; ?>