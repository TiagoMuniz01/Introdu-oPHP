<?php

$texto = "Mensagem de texto";
$n1 = 2;
$n2 = 15;
$cont; $cont2;

echo "$n1 + $n2 = " . $n1 + $n2 . "<br>";
echo "$n1 - $n2 = " . $n1 - $n2 . "<br>";
echo "$n1 * $n2 = " . $n1 * $n2 . "<br>";
echo "$n1 / $n2 = " . $n1 / $n2 . "<br>";

if ($n2 >= 10){
    echo "O número é menor ou igual a 10";
}else{
    echo "O número é maior que 10";
}

"<br>";

for($n1 = 0; $n1 <= 10; $n1++){
    echo $n1;
}

echo "<br>";
echo "<br>";

//Tabuada2

for($cont = 1; $cont <= 10; $cont++){
    echo "Tabuada do $cont" . "<br>";
    for($cont2 = 0; $cont2 <= 10; $cont2++){
        echo "$cont * $cont2 =" . $cont * $cont2 . "<br>";
    }
    echo "<br>";
}

?>