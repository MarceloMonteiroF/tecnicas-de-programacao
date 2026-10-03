<?php
    classe inventario{
        private int $capacidade;

        public function __construct(int $capacidade){
            $this->capacidade=$capacidade;
        }

        public function adicionarItem(string $item): void{
            if($this->capacidade > 0){
                $this->capacidade--;
                echo "O item $item foi adicionado ao inventário! Capacidade restante: $this->capacidade\n";
            } else {
                echo "Inventário cheio! Não é possível adicionar o item $item.\n";
            }
        }

        public function removerItem(string $item): void{
            if($this->capacidade < 10){ // Supondo que a capacidade máxima seja 10
                $this->capacidade++;
                echo "O item $item foi removido do inventário! Capacidade restante: $this->capacidade\n";
            } else {
                echo "Inventário vazio! Não é possível remover o item $item.\n";
            }
        }
    }