<?php

//unset($_COOKIE["cliente"]); //destroi cookie

if($_COOKIE["id"]==""){
    setcookie("id",0);
}

if(isset($_POST["nome"]) AND isset($_POST["email"])){
    //$cliente[] = array("nome" => $_POST["nome"], "email" => $_POST["email"]);
    $id = (integer)$_COOKIE["id"];
    //print $id;
    setcookie("cliente[$id][nome]",$_POST["nome"]);
    setcookie("cliente[$id][email]",$_POST["email"]);
    $id = (integer)$_COOKIE['id'] + 1;
    setcookie("id",$id);
    //print $_COOKIE["id"];
    header("Location: index.php");
}


