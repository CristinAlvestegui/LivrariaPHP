<?php
    //namespace PHP\Modelo;

    require_once('Livro.php');

    //use PHP\Modelo\Livro;

    $livroUm = new Livro("Harry Potter","J.K.Rollling", "12/5/2000","Salamandra" , 4561468);
    echo $livroUm->getTitulo();
?>