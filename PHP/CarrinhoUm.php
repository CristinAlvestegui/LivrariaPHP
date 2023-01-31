<?php
    /*
    require_once('TelaLivros.php');
    require_once('Cliente');

    class Carrinho{

        private float $valorTotal;
        private Livro $compra;

        public function __construct(float $valorTotal, Livro $compra){
            $this->valorTotal = $valorTotal;
            $this->compra = $compra;
        }

        public function Vendas(){//somente podemos fazer a soma dos valores da tela de livros, já que ai está o valor da cada livro.s
            $compra->getPreco +
        }

    }//Fim da classe carrinho
    */

    require_once('Livro.php');
    require_once('Cliente.php');
    require_once ('Endereco.php');

    $endereTres = new Endereco("Av Tucuruvi", "155", "Casa 3", "Zona Norte", "Santo Andre", "Curitiva", "CB", "Brasil", "46846464");
    $clienTres = new Cliente("Vitor Alves", "116548632555", $endereTres, "13/03/2016", "vitoAlv", "654321");
    $livroDois = new livro("Vampiratas", "Autor do livro", "15/4/2011", "Saraiva", 69.48, 648645, 30);
    $livroTres = new Livro("Contos de Fadas", "Vários Autores", "05/03/1999", "Senac", 25.25, 39648465, 0);

    echo "Bem-Vindo".$clienTres->getNome()."!!";
    echo "<br><br>";
    //echo $clienTres->verCliente();
    echo "Veja seu carrinho!: ";
    echo "<br><br>";
    echo $livroDois->verLivro();
    echo "<br><br>";
    echo $livroTres->verLivro();
    echo "<br><br>";
    echo "Fico um total de: ".$livroDois->getPreco() + $livroTres->getPreco();

?>