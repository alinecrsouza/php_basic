<?php
session_start();
include_once "header.php";
?>
<body>
    <main>
        <form action="clients.php" method="post">
            <fieldset>
                <legend>Cliente</legend>
                <label>Nome<input type="text" name="nome"></label>
                <label>E-mail<input type="email" name="email"></label>
            </fieldset>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </main>
    <?php include_once "footer.php"; ?>