<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class ConsuLivro{

        public function consulIndi(Conexao $connect, string $Livros, int $codigo){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Livros where ISBN = '$ISBN'";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["ISBN"] == $ISBN){
                        echo "<br>ISBN: ".$dados["ISBN"]."<br>Titulo: ".$dados["titulo"]."<br>Autor: ".$dados["autor"]."<br>Editora: ".$dados["editora"]."Lançamento: ".$dados["data"];
                        return;//return vazio só para sair do if
                    }//Fim do if
                }//Fim do while
                echo "ISBN não foi encontrado! :(";
            }
            catch(Except $erro){
                echo $erro;
            }
        }
    }//Fim da classe para consultar individualmente

?>