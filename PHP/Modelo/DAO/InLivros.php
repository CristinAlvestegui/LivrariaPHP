<?php
    namespace Livraria\PHP\Modelo\DAO;

    require_once('Conexao.php');

    use Livraria\PHP\Modelo\DAO\Conexao;

    class InLivros{
        public function cadastrar(Conexao $conex, string $Livros, string $titulo, string $autor, string $lanza, string $editora, int $ISBN){
            try{
                $conn = $conex->conectar();//Fazendo conexão com a base de dados
                $sql = "insert into $Livros (ISBN, titulo, autor, editora, lanza) values ('$ISBN','$titulo','$autor','$editora','$lanza')";//Comando script do MySQL para inserir na tabela é nessa ordem que vai ser preenchida nossa tabela!!!!
                $result = mysqli_query($conn, $sql);//Executa ação do script no banco q salvamos em sql e conn

                if($result){
                    return "<br><br>Livro Inserido com sucesso!";
                }else{
                    return "<br><br>Algo deu Errado! :(";
                }
                mysqli_close($conn);//Fechado a conexão.
                
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim do método inserir
    }//Fim da classe Inserir

?>