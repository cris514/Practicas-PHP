<?php
/*$edad=0;
if($edad>=130)
{echo "Eres chabelo".$edad;
}
else if($edad>0)
  echo "Menor de edad tienes".$edad;
  else {
    echo "Edad Invalida";
  }*/
/*Pedir 3 articulos y calcular el descuento de 10%
si pasa de 1000 y si no apicar 5%*/
$p1=500;
$p2=500;
$p3=500;
$suma=($p1+$p2+$p3);
//echo $sumap;

echo "p1 ".$p1."<br>"."p2 ".$p2."<br>"."p3 ".$p3."<br>"."subtotal ".$suma."<br>";
if($suma>=1000)
echo "descuento".$suma*.10."<br>"."total".($suma-($suma*.10));
else {
  echo "descuento".$suma*.05."<br>"."total".($suma-($suma*.05));

}




?>
