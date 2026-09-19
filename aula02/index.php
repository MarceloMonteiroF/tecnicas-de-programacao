<?php
    //importando as classes
    require_once 'src/Personagem.php';

    //avisar o php classe que iremos usar
    use aula02\Personagem;
    echo"============TESTE DE PERSONAGEM============\n";
    //criar um personagem
    $heroi=new Personagem("Mr. Pizza",100);
    $heroi->receberDano(20);
    $heroi -> curar(10); 
?>