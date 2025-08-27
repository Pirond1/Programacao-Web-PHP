<?php
    session_start();
    
    $_SESSION['contador'] = ($_SESSION['contador'] ?? 0) + 1;

    echo $_SESSION['contador']."<br/>";

    echo "ID da Sessão: ". session_id(). "<br/><br/>";
    session_destroy();

    setcookie("nome", "valor", time()+60);

    $value = $_COOKIE["nome"];
    echo "$value<br/><br/>";
?>