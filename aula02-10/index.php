<?php

    //importando as classes
    require_once 'conta.php';
    require_once 'administrador.php';
    //Criando uma instância da classe Conta
    $conta = new Conta(1, "patati@patata.com", "2345678");
    echo $conta->login("2345678") ? "Login realizado com sucesso!\n" :"Senha incorreta!\n"; 

    //Criando uma instância da classe Administrador
    $admin = new administrador("Moderador");
    $admin->banirJogador("Patati");
?>