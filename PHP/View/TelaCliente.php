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

  $endereDois = new Endereco("Av Bolivia", "265","Apto. 2", "Centro", "São Bernardo do Campo", "Rio Janeiro", "RJ", "Brasil", "06468487" );
  $clienDois = new Cliente("Cristina Alves", "11954687888", $endereDois, "06/09/1955", "alvesTina", "987654");
  $endereTres = new Endereco("Av Tucuruvi", "155", "Casa 3", "Zona Norte", "Santo Andre", "Curitiva", "CB", "Brasil", "46846464");
  $clienTres = new Cliente("Vitor Alves", "116548632555", $endereTres, "13/03/2016", "vitoAlv", "654321");

  echo $cliente->verCliente();
  echo $enderecCamila->verEndere();
  echo "<br><br>";
  echo $clienDois->verCliente();
  echo $endereDois->verEndere();
  echo "<br><br>";
  echo $clienTres->verCliente();
  echo $endereTres->verEndere();

?>