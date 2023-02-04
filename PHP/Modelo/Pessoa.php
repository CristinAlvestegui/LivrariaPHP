<?php
    namespace Livraria\PHP\Modelo;

    require_once('Endereco.php');

    class Pessoa{
        private string $nome;
        private string $telefone;
        private Endereco $endereco;

        public function __construct (string $nome, string $telefone , Endereco $endereco){
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;

        }//fim do construtor

        //métodos get  e sets

        public function getNome() : string
        {
            return $this->nome;
        }//fim get nome

        public function setNome(string $cpf) : void
        {
            $this->nome = $nome;
        }//fim get nome

        public function getTelefone() : string
        {
            return $this->telefone;            
        }//fim get telefone

        public function setTelefone(string $telefone) : void
        {
            $this->telefone = $telefone;
        }//fim set telefone

    }// fim da classe pessoa
    ?>