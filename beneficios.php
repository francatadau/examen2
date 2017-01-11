<?php

/**
 *
 */
 //Incluimos la clase
class beneficios
{

private $ventas=[];
private $gastos=[];
  //Almacenamos las ventas y si el número no es negativo se almacena.
  public function almacenarVentas($venta){
  if ($venta>=0) {

  //AlmacenarVenta
  $this->ventas[]=$venta;
  }
}
  //Almacenamos los gastos y si el número no es negativo se almacena.
  public function almacenarGastos($gasto){
    if ($gasto>=0) {

    //AlmacenarGastos
    $this->gastos[]=$gasto;
    }
}
public function imprimirVentas(){
  foreach ($this->ventas as $key => $value) {
    echo $value."<br>";
  }
}

public function imprimirGastos(){
  foreach ($this->gastos as $key => $value) {
    echo $value."<br>";
  }
}

    public function calcularBeneficios(){
      $total1=0;
      foreach ($this->ventas as $key => $value) {
        $total1=$total1+$value;
      }
      $total2=0;
      foreach ($this->gastos as $key => $value) {
        $total2=$total2+$value;
    }
    return $total1-$total2;
}
}

 ?>
