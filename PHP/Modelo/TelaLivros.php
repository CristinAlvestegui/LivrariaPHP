<?php
    namespace Livraria\PHP\Modelo;

    require_once('DAO/Conexao.php');
    require_once('DAO/InLivros.php');
    require_once('DAO/ConsuLivro.php');
    require_once('DAO/ConsuDocks.php');
    require_once('DAO/InDocks.php');

    use Livraria\PHP\Modelo\DAO\Conexao;
    use Livraria\PHP\Modelo\DAO\ConsuLivro;
    use Livraria\PHP\Modelo\DAO\InLivros;
    use Livraria\PHP\Modelo\DAO\InDocks;
    use Livraria\PHP\Modelo\DAO\ConsuDocks;

    /*
    class TelaLivros{
        $livroUm = new Livro("Harry Potter","J.K.Rollling", "12/5/2000","Salamandra",56.10, 4561468, 10);
        $livroDois = new livro("Vampiratas", "Autors do livro", "15/4/2011", "Saraiva", 69.48, 648645, 30);
        $livroTres = new Livro("Contos de Fadas", "Vários Autores", "05/03/1999", "Senac", 25.25, 39648465, 0);
    
        private Livro $livroUm;
        private Livro $livroDois;
        private Livro $livroTres;

        public function __construct(Livro $livroUm, Livro $livroDois, Livro $livroTres){
            $this->livroUm = $livroUm;
            $this->livroDois = $livroDois;
            $this->LivroTres = $livroTres;
        }
        
        public function menuLivros(){
            echo $livroUm->verLivro();
            echo "<br> <br>";
            echo $livroDois->verLivro();
            echo "<br> <br>";
        }
        
            echo $livroUm->getPreco() + $libroDois->getPreco();
    }//Fim da classe Tela Livros   
    //use PHP\Modelo\Livro;

    


    $livroUm = new Livro("Harry Potter","J.K.Rollling", "12/5/2000","Salamandra", 4561468);
    $dockUm = new Docks($livroUm, 10, 45.69);
    $livroDois = new livro("Vampiratas", "Autor do livro", "15/4/2011", "Saraiva", 648645, );
    $dockDois = new Docks($livroDois, 5, 69.45);
    $livroTres = new Livro("Contos de Fadas", "Vários Autores", "05/03/1999", "Senac", 39648465);
    $dockTres = new Docks($livroTres, 0, 25.52);

    echo $livroUm->verLivro();
    echo "<br> <br>";
    echo $livroDois->verLivro();
    echo "<br> <br>";
    echo $livroTres->verLivro();
    echo "<br> <br>";

    */

    echo "++++++++++++ Banco de Dados +++++++++++++++<br><br><br>";
    $entrar = new Conexao();
    $entrar->conectar();

    $regis = new InLivros();
    $nich = new InDocks();
    $verLi = new ConsuLivro();
    $verNi = new ConsuDocks();
    //echo $regis->cadastrar($entrar, "Livros", "Harry Potter", "J.K.Rollling", "12/5/2000", "Salamandra", 7);
    
    echo $nich->cadastrar($entrar, "Nicho", 12, 45.69);
    
    echo $verLi->consulTudo($entrar, "Livros");
    echo $verNi->consuTodo($entrar, "Nicho");
?>