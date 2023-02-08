<?php
    namespace Livraria\PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Livraria\PHP\Modelo\DAO\Conexao;

    class ConsuLivro{

        public function consulIndi(Conexao $connect, string $Livros, int $ISBN){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Livros where ISBN = '$ISBN'";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["ISBN"] == $ISBN){
<<<<<<< HEAD
                        echo "<br><br>ISBN ".$dados["ISBN"]."<br>Titulo: ".$dados["titulo"]."<br>Autor: ".$dados["autor"]."<br>Editora: ".$dados["editora"]."<br>Lançamento: ".$dados["lanza"]."<br><br>";
=======
                        echo "<br>ISBN: ".$dados["ISBN"]."<br>Titulo: ".$dados["titulo"]."<br>Autor: ".$dados["autor"]."<br>Editora: ".$dados["editora"]."Lançamento: ".$dados["data"]."<br>Editora: ".$dados["editora"]."Lançamento: ".$dados["data"]."<br><br>";
>>>>>>> 99d9c52b995e0c8a5a65c96fac7ef7fc792b2724
                        return;//return vazio só para sair do if
                    }//Fim do if
                    echo "ISBN não foi encontrado! :(";
                }//Fim do while
                mysqli_close($conn);
                
            }
            catch(Except $erro){
                echo $erro;
<<<<<<< HEAD
            }
        }//Fim da função para consultar livros individuais

        public function consulTudo(Conexao $connect, string $Livros){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Livros";
                $result = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>ISBN ".$dados["ISBN"]."<br>Titulo: ".$dados["titulo"]."<br>Autor: ".$dados["autor"]."<br>Editora: ".$dados["editora"]."<br>Lançamento: ".$dados["lanza"]."<br><br>";
                }//Fim do while
                mysqli_close($conn);
            }
            catch(Except $erro){
                echo $erro;
            }//Fim do Try Catch
        }//Fim do método para Consultar todos os livros
    }//Fim da classe para consultar individualmente
=======
            }//Fim do Try Catch
        }//Fim do método para consultar Livro individual
>>>>>>> 99d9c52b995e0c8a5a65c96fac7ef7fc792b2724

        public function consulTudo(Conexao $connect, string $Livros){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Livros";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["ISBN"] == $ISBN){
                        echo "<br>ISBN: ".$dados["ISBN"]."<br>Titulo: ".$dados["titulo"]."<br>Autor: ".$dados["autor"]."<br>Editora: ".$dados["editora"]."Lançamento: ".$dados["data"]."<br><br>";
                        return;//return vazio só para sair do if
                    }//Fim do if
                }//Fim do while
                mysqli_close($conn);
                
            }
            catch(Except $erro){
                echo $erro;
            }//Fim do Try Catch
        }//Fim do método para Consultar todos os livros
    }//Fim da classe para consultar Livro

?>
