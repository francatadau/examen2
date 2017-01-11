<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ventas</title>
  </head>
  <body>
    <?php
    //Incluimos la clase poniendo su nombre
    include "beneficios.php";
    //Creamos un objeto
    $venta=new beneficios();
    //En almacenar ventas y gastos, añadimos un valor a nuestro array.
    $venta->almacenarVentas(50);
    $venta->almacenarGastos(45);
    $venta->imprimirVentas();
    $venta->imprimirGastos();
    echo "<hr>";

    $venta->almacenarVentas(125.6);
    $venta->almacenarGastos(115.2);
    $venta->imprimirVentas();
    $venta->imprimirGastos();
    echo "<hr>";

    $venta->almacenarVentas(23.4);
    $venta->almacenarGastos(11.9);
    $venta->imprimirVentas();
    $venta->imprimirGastos();
    echo "<hr>";
    //Lo que va a hacer calcularBeneficios es restar las ventas entre los gastos.

    $venta->calcularBeneficios();

     ?>
  </body>
</html>
