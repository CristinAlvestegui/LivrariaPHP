<?php
    namespace Livraria\PHP\Modelo\Nicho;

    require_once("Livro.php");
    
    class Docks{
        private int $quanti;
        private float $preco;
        private Livro $books;

        public function __construct(Livro $books, int $quanti, float $preco){
            $this->books = $books;
            $this->quanti = $quanti;
            $this->preco = $preco;
        }//Fim do construtor

        //Get Set

        public function getQuan() : int{
            return $this->quanti;
        }

        public function setQuan(int $quanti): void{

        }

        public function getPreco() : float{
            return $this->preco;
        }

        public function setPreco(float $preco){
            $this->preco = $preco;
        }

        public function chekDock() :string{
            if($this->getQuan() < 0){
                return "Lamentavelmente não temos esse produto<br>Deseja fazer uma Reserva?";
            }
        }

        public function verDocks(): void{
            echo "<br> Quantidade:  ".$this->getQuan()."<br> Preço:  ".$this->getPreco()."R$";
        }

    }//classe docks
?>