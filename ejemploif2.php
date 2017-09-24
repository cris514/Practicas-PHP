
<?php

$num1 = 300;
$num2 = 300;
$num3 = 300;


echo "P1 = " . $num1 . "<br>" . "P2 = " . $num2 . "<br>" . "P3 = " . $num3 . "<hr>" .
"El subtotal es " .($num1 + $num2 + $num3). "<br>"  ;

if ($num1 + $num2 + $num3 >= 1000)

echo  "Tu descuento es " . ($num1 + $num2 + $num3* .10) ."<br>". "Tu total es " . ($num1 + $num2 + $num3 -($num1 + $num2 + $num3*.10));


else

echo "Tu descuento es " . ($num1 + $num2 + $num3* .05) ."<br>" ."Tu total es " . ($num1 + $num2 + $num3 -($num1 + $num2 + $num3*.05 ));


?>
