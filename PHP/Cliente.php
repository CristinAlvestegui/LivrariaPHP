<?php
    require_once('Endereco.php');

class Cliente{
    private string $nome;
    private string $telefone;
    private string $nascimento;
    

    private Endereco $endereco;    

    public function __construct (string $nome, string $telefone , Endereco $endereco, string $nascimento,string $login,string $senha){

        $this->nome       = $nome;
        $this->telefone   = $telefone;
        $this->endereco   = $endereco;
        $this->nascimento = $nascimento;
        

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

    

    public function verCliente() : void{
        echo "<br>Nome:  ".$this->getNome()."<br>Telefone:  ".$this->getTelefone()."<br>Aniversário:  ".$this->getNascimento();
    }
}// fim da classe pessoa

?>