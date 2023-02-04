<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class InLivros{
        public function cadastrar(Conexao $conex, string $Livros, string $titulo, string $autor, string $data, string $editora, int $ISBN){
            try{
                $conn = $conex->conectar();//Fazendo conexão com a base de dados
                $sql = "insert into $Livros (ISBN, titulo, autor, editora, lanza) values ('$ISBN','$titulo','$autor','$data','$editora')";//Comando script do MySQL para inserir na tabela
                $result = mysqli_query($conn, $sql);//Executa ação do script no banco
                mysqli_close($conn);//Fechado a conexão.
                if($result){
                    return "<br><br>Livro Inserido com sucesso!";
                }
                return "<br><br>Algo deu Errado! :(";
                
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim do método inserir
    }//Fim da classe Inserir

?>