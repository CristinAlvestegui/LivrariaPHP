<?php
    namespace Livraria\PHP\Modelo\DAO;

    require_once('Conexao.php');
    
    use Livraria\PHP\Modelo\DAO\Conexao;

    class ConsuDocks{
        public function consuIndi(Conexao $connect, string $Nicho, int $codigo){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Nicho where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["codigo"] == $codigo){
                        echo "<br><br>Código: ".$dados["codigo"]."<br>Quantiadade: ".$dados["quanti"]."<br>Preço: ".$dados["preco"]."<br><br>";
                        return;//return vazio só para sair do if
                    }//Fim do if
                }//Fim do while
                echo "Código não foi encontrado! :(";
            }
            catch(Except $erro){
                echo $erro;
            }
        }//Fim do método para consultar Docks individualmente

        public function consuTodo(Conexao $connect, string $Nicho){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Nicho";
                $result = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>Código:  ".$dados["codigo"]."<br>Quantidade: ".$dados["quanti"]."<br>Preço: ".$dados["preco"]."<br><br>";
                }//Fim do while
                mysqli_close($conn);
            }
            catch(Except $erro){
                echo $erro;
            }
        }//Fim do método para consultar Todos os livros
    }//Fim da classe para consultar Docks de livros

?>