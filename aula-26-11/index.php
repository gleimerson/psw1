<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
<?php
$var = "Bill Gates";
$tipo = gettype($var);
echo "$var" . "$tipo" . "<br>";
$var = 12;
$tipo = gettype ($var);
echo "$var ($tipo) <br>";
$var = 3.1415;
$tipo = gettype ($var);
echo "$var ($tipo) <br>";
$var = true;
$tipo = gettype ($var);
echo "$var ($tipo) <br>";


 $var =null;
 if(is_null($var)) {
 echo "Variável" . "\$var" . "é nula/vazia!". "<br>";
 }
 $var = "Bill GAtes";
 if(is_string($var)) {
 echo "Variável \$var é uma string!<br>";
 }
 $var = 12;
 if(is_integer($var)) {
 echo "Variável \$var é um inteiro!<br>";
 }
 $var = false;
 if(is_bool($var)) {
 echo "Variável \$var é booleana!<br>";
 }
 $var =13.1415;
 if(is_float($var)) {
 echo "Variável \$var é float!";
 }

?> 
</body>
</html>
