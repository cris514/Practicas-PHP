<?php
$N1 = 2000 ;
$N2 = 200;
$N3 = 200;
$Subtotal= $N1 + $N2 + $N3;

echo "Numero 1 = ".$N1."<br>".
     "Numero 2 = ".$N2."<br>".
     "Numero 3 = ".$N3."<br>".
     "<hr>".
     "SubTotal = ".$Subtotal."<br>";
if ($Subtotal>=1000)
  $d = 10;
else
  $d = 5;
  echo "<br>"."Aplica $d% de descuento a ".$Subtotal.
      "<br>"."Descuento".($Subtotal*$d/100)."el total es".($Subtotal-($Subtotal*$d/100));




 ?>
