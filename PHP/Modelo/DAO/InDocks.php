<?php
    namespace Livraria\PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Livraria\PHP\Modelo\DAO\Conexao;

    class InDocks{
        public function cadastrar(Conexao $conex, string $Nicho, int $quanti, float $preco){
            try{
                $conn = $conex->conectar();//Fazendo conexão com a base de dados
                $sql = "insert into $Nicho (codigo, quanti, preco) values ('','$quanti','$preco')";//Comando script do MySQL para inserir na tabela é nessa ordem que vai ser preenchida nossa tabela!!!!
                $result = mysqli_query($conn, $sql);//Executa ação do script no banco q salvamos em sql e conn
    
                if($result){
                    return "<br><br>Estoque Inserido com sucesso!";
                }else{
                    return "<br><br>Algo deu Errado! :(";
                }
                mysqli_close($conn);//Fechado a conexão.
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim da função para cadastrar Docks
        
    }//Fim da classe
?>