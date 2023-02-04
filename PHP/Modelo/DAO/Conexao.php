<?php
    namespace Livraria\PHP\Modelo\DAO;

    class Conexao{
        public function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'Books');
                if($conn){
                    echo "<br> Conexão feita com sucesso!";
                    return $conn;
                }else{
                    echo "<br> Não Entramos! :(";
                }
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim do conectar

    }//Fim da classe

?>