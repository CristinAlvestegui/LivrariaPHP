<?php
        namespace Livraria\PHP\Modelo;

        require_once('Livro.php');
        require_once('Cliente.php');
        require_once ('Endereco.php');
        //require_once('TelaLivros.php');

        $livroUm = new Livro("Harry Potter","J.K.Rollling", "12/5/2000","Salamandra",56.10, 4561468, 10);
        $livroDois = new livro("Vampiratas", "Autor do livro", "15/4/2011", "Saraiva", 69.48, 648645, 30);
        $livroTres = new Livro("Contos de Fadas", "Vários Autores", "05/03/1999", "Senac", 25.25, 39648465, 0);

        echo $livroUm->verLivro();
        echo "<br> <br>";
        echo $livroDois->verLivro();
        echo "<br> <br>";
        echo $livroTres->verLivro();
        echo "<br> <br>";
        //echo $livroUm->getPreco();Somente aqui podemos ver os valores por que é nessa tela que estamos preenchendo os parametros.
        //echo $livroUm->getPreco() + $livroDois->getPreco(); é algo assim cris...temos que dar um jetio de somar
        

        //private TelaLivros $todos;

        //echo $todos->menuLivros($livroUm);

        $enderecCamila = new Endereco(
                "Avenida Senador Vergueiro",
                "400",
                "Senacão",
                "Centro",
                "São Bernardo do Campo",
                "São Paulo",
                "SP",
                "Brasil",
                "02345000"
              );
            
              $cliente = new Cliente ("Camila Pereira", "11963236658", $enderecCamila,"01/08/1997", "Oliveiracamilla", "123654");
            
              $endereDois = new Endereco("Av Bolivia", "265","Apto. 2", "Centro", "São Bernardo do Campo", "Rio Janeiro", "RJ", "Brasil", "06468487" );
              $clienDois = new Cliente("Cristina Alves", "11954687888", $endereDois, "06/09/1955", "alvesTina", "987654");
              $endereTres = new Endereco("Av Tucuruvi", "155", "Casa 3", "Zona Norte", "Santo Andre", "Curitiva", "CB", "Brasil", "46846464");
              $clienTres = new Cliente("Vitor Alves", "116548632555", $endereTres, "13/03/2016", "vitoAlv", "654321");
            
              echo "Dados da cliente:".$cliente->verCliente();
              echo "<br><br>";
              echo "Dados da cliente:".$clienDois->verCliente();
              echo "<br><br>";
              echo $clienTres->verCliente();
        

?>
