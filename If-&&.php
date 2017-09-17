<?php
/*Imprimir el numero mayor de dos variables, si son iguales decirlo.  */

$Num1=17;
$Num2=17;
$Num3=17;
/*
if($Num1>$Num2){
  echo $Num1." Es Mayor que ". $Num2;
}elseif ($Num2>$Num1) {
  echo $Num2." Es mayor que ". $Num1;
}
else {
  echo "Los Numeros son igualitos chavo :)";
}*/


/*Imprimir el numero mayor de 3 variables, si son iguales decirlo.  */
if (($Num1>$Num2)&&($Num1>$Num3)) {
  echo "<br>".$Num1. " Es mayor que ".$Num2." y ".$Num3;
}elseif (($Num2>$Num1)&&($Num2>$Num3))  {
  echo "<br>".$Num2. " Es mayor que ".$Num1." y ".$Num3;
}elseif (($Num3>$Num1)&&($Num3>$Num2))  {
  echo "<br>".$Num3. " Es mayor que ".$Num1." y ".$Num2;
}elseif (($Num1==$Num2)&&($Num1==$Num3)) {
  echo "<br>".$Num1. " Es igual que ".$Num2." y ".$Num3;
}elseif (($Num2==$Num1)&&($Num2>$Num3)) {
  echo "<br>".$Num2. " Es igual que ".$Num1." y ".$Num3;
}elseif (($Num3==$Num1)&&($Num3>$Num2)) {
  echo "<br>".$Num3. " Es igual que ".$Num1." y ".$Num2;
}else {
  echo "<br>".$Num2. " Es igual que ".$Num3." y ".$Num1;
}
 ?>
