<?php
    namespace Livraria\PHP\Modelo;

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

        public function __get(string $qualVari) : string{
            return $this->qualVari;
        }//Fim do get para qualquer variável

        public function __set(string $qualVari, string $valor) : void{
            $this->qualVari = $valor;
        }//Fim do set para qualquer variável

        public function __toString() :string{
            return "<br> Logradouro:  ".$this->logradouro."<br> Número:  ".$this->numero."<br> Complemento:  ".$this->complemento."<br>CEP:  ",$this->cep,"<br>Bairro: ".$this->bairro."<br>Cidade: ".$this->cidade."<br>Estado: ".$this->estado."<br>UF: ".$this->UF."Pais: ".$this->pais;
        }

    }// fim classe endereço

?>