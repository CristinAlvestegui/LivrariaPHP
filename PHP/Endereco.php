<?php

    class Endereco{
        public string $logradouro;
        public string $numero;
        public string $complemento;
        public string $cep;
        public string $bairro;
        public string $cidade;
        public string $estado;
        public string $UF;
        public string $pais;

        public function __construct (string $logradouro, string $numero, string $complemento, string $cep, string $bairro, string $cidade,string $estado, string $UF, string $pais){
            $this->logradouro       = $logradouro;
            $this->numero           = $numero;
            $this->complemento      = $complemento;
            $this->cep              = $cep;
            $this->bairro           = $bairro;
            $this->cidade           = $cidade;
            $this->estado           = $estado;
            $this->uf               = $UF;
            $this->pais             = $pais;

        }//fim do construtor

        //métodos get  e sets
        public function getLogradouro() : string
        {
            return $this->logradouro;
        }//fim get logradouro

        public function setLogradouro(string $logradouro) : void
        {
            $this->logradouro = $logradouro;
        }//fim set logradouro

         //métodos get  e sets
        public function getNumero() : string
        {
            return $this->numero;
        }//fim get numero

        public function setNumero(string $numero) : void
        {
            $this->numero = $numero;
        }//fim set numero

        public function getComplemento() : string
        {
            return $this->complemento;
        }//fim get complemento

        public function setComplemento(string $complemento) : void
        {
            $this->complemento = $complemento;
        }//fim set complemento

        public function getCep() : string
        {
            return $this->cep;
        }//fim get cep

        public function setCep(string $cep) : void
        {
            $this->cep = $cep;
        }//fim set cep
            
        public function getBairro() : string
        {
            return $this->bairro;
        }//fim get bairro

        public function setBairro(string $bairro) : void
        {
            $this->bairro = $bairro;
        }//fim set bairro

        public function getCidade() : string
        {
            return $this->cidade;
        }//fim get cidade

        public function setCidade(string $cidade) : void
        {
            $this->cidade = $cidade;
        }//fim set cidade

         public function getEstado() : string
         {
             return $this->estado;
         }//fim get estado

        public function setEstado(string $estado) : void
        {
            $this->estado = $estado;
        }//fim set estado

        public function getUf() : string
        {
            return $this->UF;
        }//fim get uf
        public function setUf(string $UF) : void
        {
            $this->uf = $UF;
        }//fim set uf

        public function getPais() : string
        {
            return $this->pais;
        }//fim get pais

        public function setPais(string $pais) : void
        {
            $this-> pais = $pais;
        }//fim set numero
        
        public function verEndere() : void{
            echo "<br> Logradouro:  ".$this->getLogradouro()."<br> Número:  ".$this->getNumero()."<br> Complemento:  ".$this->getComplemento();
        }

    }// fim classe endereço

?>