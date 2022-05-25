<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "farmacia";
    $conexao = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "Não pode conectar a base de dados";
        exit();
    }
    mysqli_select_db($conexao,$bd) or die("Não se encontra na base de dados");
    mysqli_set_charset($conexao,"utf8");
?>
