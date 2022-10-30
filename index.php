<?php
   $a = $_POST['number1'];
   $b = $_POST['number2'];
   $c = $_POST['number3'];

   echo "<br>Primeiro número digitado:".$a;
   echo "<br>Segundo número digitado:".$b;
   echo "<br>Terceiro número digitado:".$c;

   if (($a<$b+$c) && ($b<$a+$c) && ($c<$a+$b)) {
        if ($a == $b && $b == $c) {
            echo "<br>O triângulo é equilátero";
        } elseif ($a == $b && $c != $b) {
            echo "<br>O triângulo é isósceles";
        } elseif ($a != $b && $b != $c) {
            echo "<br>O triângulo é escaleno";
        } else {
            echo "Os valores são inválidos!";
        }
   }
?>