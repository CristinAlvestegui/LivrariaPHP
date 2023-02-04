<?php
    require_once('Cliente.php');

    class Login{
        private string $login;
        private string $senha;
        private string $email;
        private Cliente $cli;

        public function __construct(Cliente $cli, string $login, string $senha, string $email){
            $this->login      = $login;
            $this->senha      = $senha;
            $this->email      = $email;
            $this->cli        = $cli;
        }

        public function getLogin() : string {
            return $this->login;            
        }//fim get login

        public function setLogin(string $login) : void {
            $this->login = $login;
        }//fim set login

        public function getSenha() : string {
            return $this->senha;            
        }//fim get senha

        public function setSenha(string $senha) : void {
            $this->senha = $senha;
        }//fim set telefone

        public function getEmail() : string {
            return $this->email;
        }

        public function setEmail(string $email) : void{
            $this->email = $email;
        }
            
        public function fazerLog(Login $log, Login $pass){
            if(($log->getSenha() == $senha) &&($pass->getSenha() == $log)){
                echo "login com sucesso!";//e leva para tela de livros.
            }
        }

        //fazer função para verificar e-mail caso senha deva ser reiniciada.
    }//Fim da classe para login
?>
