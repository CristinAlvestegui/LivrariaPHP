<?php
  //namespace PHP;
  require_once ('Cliente.php'); // chama a classe cliente
  require_once ('Endereco.php');
  //use PHP\Modelo\Cliente;

  $enderecCamila = new Endereco(
    "Avenida Senador Vergueiro",
    "400",
    "Senacão",
    "Centro",
    "São Bernardo do Campo",
    "São Paulo",
    "SP",
    "Brasil",
    "02345000"
  );

$cliente = new Cliente ("Camila Pereira", "11963236658", $enderecCamila,"01/08/1997", "Oliveiracamilla", "123654");

echo "Dados da cliente:".$cliente->getNome();

?>