<?php
    namespace Livraria\PHP\Modelo\Nicho;

    class Livro{
        private string $titulo;
        private string $autor;
        private string $data;
        private string $editora;
        private int $ISBN;
        
        public function __construct(string $titulo, string $autor, string $data, string $editora, int $ISBN){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->data = $data;
            $this->editora = $editora;
            
            $this->ISBN = $ISBN;
            
        }

        //GET SET

        public function __get(string $qualVari) : string{//jeito mais simples, instead de fazer cada get de cada variável.
            return $this->$qualVari;
        }

        public function __set(string $qualVari, string $valor) :void{
            $this->qualVari = $valor;
        }

        public function __Tostring() : string{//converte todo em string
            return "<br> Titulo:  ".$this->getTitulo()."<br>Autor:  ".$this->getAutor()."<br> Data lançamento:  ".$this->getData()."<br>Editora:  ".$this->getEditora()."<br> ISBN - ".$this->getISBN();
        }

    }//Fim da classe livros

?> 