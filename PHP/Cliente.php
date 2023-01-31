<?php
    require_once('Endereco.php');

class Cliente{
    private string $nome;
    private string $telefone;
    private string $nascimento;
    private string $login;
    private string $senha;

    private Endereco $endereco;    

    public function __construct (string $nome, string $telefone , Endereco $endereco, string $nascimento,string $login,string $senha){

        $this->nome       = $nome;
        $this->telefone   = $telefone;
        $this->endereco   = $endereco;
        $this->nascimento = $nascimento;
        $this->login      = $login;
        $this->senha      = $senha;

    }//fim do construtor

    //Métodos Gets  e Sets

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

    public function getNascimento() : string
    {
        return $this->nascimento;            
    }//fim get nascimento

    public function setNascimento(string $nascimento) : void
    {
        $this->nascimento = $nascimento;
    }//fim set nascimento

    public function getLogin() : string
    {
        return $this->login;            
    }//fim get login

    public function setLogin(string $login) : void
    {
        $this->login = $login;
    }//fim set login

    public function getSenha() : string
    {
        return $this->senha;            
    }//fim get senha

    public function setSenha(string $senha) : void
    {
        $this->senha = $senha;
    }//fim set telefone

    public function verCliente() : void{
        echo "<br>Nome:  ".$this->getNome()."<br>Telefone:  ".$this->getTelefone()."<br>Aniversário:  ".$this->getNascimento();
    }
}// fim da classe pessoa

?>