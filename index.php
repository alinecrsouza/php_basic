<?php
session_start();
//session_destroy();
include_once "header.php"; ?>
<body>
    <header>
        <?php if(isset($_SESSION['logado'])):?>
            <h1>Modo Restrito</h1><br><br>
            <a href="insert_client.php">Cadastrar</a>
            <a href="logout.php">Sair</a>
        <?php else:?>
            <h1>Modo Público</h1><br><br>
             <a href="login.php">Entrar</a>
        <?php endif;?>
    </header>
    <main>
        <?php
            //include_once "clients.php";
            //$data = unserialize($_COOKIE['cliente']);
            //print_r($data);
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($_COOKIE['cliente'])):?>
                    <?php for($i=0; $i<count($_COOKIE['cliente']);$i++):?>
                        <tr>
                            <td><?=$_COOKIE['cliente'][$i]['nome']?></td>
                            <td><?=$_COOKIE['cliente'][$i]['email']?></td>
                        </tr>
                    <?php endfor;?>
                <?php endif;?>

            </tbody>
        </table>
    </main>
    <?php include_once "footer.php"; ?>
