<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> A05 </title>
  </head>
  <body>
    <?php
//getters
    include "zapas.php";
    $talla = new zapas();
    $talla -> gettalla();
    $marca =new zapas();
    $marca ->getmarca();
    $color = new zapas();
    $color ->getcolor();
    $modelo = new zapas();
    $modelo ->getmodelo();
//setters
    $talla ->settalla("47 ");
    echo "<br> talla: " .$talla->gettalla();
    $marca ->setmarca("jordan ");
    echo "<br> marca: " .$marca->getmarca();
    $color ->setcolor("rojo");
    echo "<br> color: " .$color->getcolor();
    $modelo ->setmodelo("AirJordan1");
    echo "<br> modelo: " .$modelo->getmodelo();
     ?>
  </body>
</html>
