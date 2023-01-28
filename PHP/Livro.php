<?php
    //namespace PHP\Modelo;
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

        public function getTitulo() :string{
            return $this->titulo;
        }

        public function setTitulo(string $titulo) : void{
            $this->titulo = $titulo;
        }

        public function getAutor() :string{
            return $this->autor;
        }

        public function setAutor(string $autor) : void{
            $this->autor = $autor;
        }

        public function getData() : string{
            return $this->data;
        }

        public function setData(date $data) : void{
            $this->data = $data;
        }

        public function getEditora() : string{
            return $this->editora;
        }

        public function setEditora(string $data) : void{
            $this->editora = $editora;
        }

        public function getISBN() : int{
            return $this->ISBN;
        }

        public function setISBN(int $ISBN) : void{
            $this->ISBN = $ISBN;
        }

    }//Fim da classe livros

?> 