<?php

    namespace Livraria\PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Livraria\PHP\Modelo\DAO\Conexao;

    class ConsuEndere{

        public function consuIndi(Conexao $conne, string $Address, int $codigo){
            try{
                $conn = $conne->conectar();
                $sql = "select * from $Address where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["codigo"] == $codigo){
                        echo "<br><br>Código: ".$dados["codigo"]."<br>Logradouro: ".$dados["lograd"]."<br>Número: ".$dados["numero"]."<br>Complemento: ".$dados["comple"]."<br>CEP: ".$dados["cep"]."<br>Bairro: ".$dados["bairro"]."<br>Cidade: ".$dados["didade"]."<br>Estado: ".$dados["estado"]."<br>UF: ".$dados["uf"]."<br>Pais: ".$dados["pais"]."<br><br>";
                        return;//return vazio só para sair do if
                    }//Fim do if
                }//Fim do while
                echo "Código não foi encontrado! :(";
            }
            catch(Except $erro){
                echo $erro;
            }
        }//Fim do metodo para consultar Individualmente o Endereço

        public function consuTudo(Conexao $conne, string $Address){
            try{
                $conn = $conne->conectar();
                $sql = "select * from $Address";
                $result = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>Código: ".$dados["codigo"]."<br>Logradouro: ".$dados["lograd"]."<br>Número: ".$dados["numero"]."<br>Complemento: ".$dados["comple"]."<br>CEP: ".$dados["cep"]."<br>Bairro: ".$dados["bairro"]."<br>Cidade: ".$dados["cidade"]."<br>Estado: ".$dados["estado"]."<br>UF: ".$dados["uf"]."<br>Pais: ".$dados["pais"]."<br><br>";
                }//Fim do while
                mysqli_close($conn);
            }
            catch(Except $erro){
                echo $erro;
            }
        }//Fim do método para consultar tudo

    }//Fim da classe para consultar Endereço

?>