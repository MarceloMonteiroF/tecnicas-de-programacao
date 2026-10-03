<?php
    private string $apelido;
    private int $nivel;
    private int $xp;
    private int $moedas;

    public function __construct(string $apelido, int $nivel, int $xp, int $moedas){
        $this->apelido=$apelido;
        $this->nivel=$nivel;
        $this->xp=$xp;
        $this->moedas=$moedas;
    }

    public function ganharXP(int $qtd): void{
        $this->xp+=$qtd;
        echo "O jogador $this->apelido ganhou $qtd de XP! Total de XP: $this->xp\n";
    }

    public function gastarMoedas(int $qtd): void{
        if($qtd <= $this->moedas){
            $this->moedas-=$qtd;
            echo "O jogador $this-> apelido gastou $qtd moedas! Total de moedas restantes: $this->moedas\n";
        }
    }