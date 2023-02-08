<?php

    namespace Livraria\PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Livraria\PHP\Modelo\DAO\Conexao;

    class InEndere{
        public function cadastrar(Conexao $conect, string $Address, string $lograd, string $numero, string $comple, int $cep, string $bairro, string $cidade, string $estado, string $UF, string $pais){
            try{
                $conn = $conect->conectar();//Fazendo conexão com a base de dados
                $sql = "insert into $Address (codigo, lograd, numero, comple, cep, bairro, cidade, estado, uf, pais) values ('','$lograd','$numero','$comple','$cep','$bairro','$cidade','$estado','$UF','$pais')";//Comando script do MySQL para inserir na tabela é nessa ordem que vai ser preenchida nossa tabela!!!!
                $result = mysqli_query($conn, $sql);//Executa ação do script no banco q salvamos em sql e conn

                if($result){
                    return "<br><br>Endereço Inserido com sucesso!";
                }else{
                    return "<br><br>Algo deu Errado! :(";
                }
                mysqli_close($conn);//Fechado a conexão.
                
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim da função para cadastrar o endereço

    }//Fim da classe para Endereço
?>