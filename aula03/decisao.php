<?php
$n = 6;

if ($n >= 4) {
    echo $n, "é maior ou igual a 4 <br>";
}

if($n) {
    echo "a variavel tem valor!";
} else {
    echo "a variavel não tem valor!";
}

$n1 = 3;
$n2 = 4;

$result = ($n1%$n2)%2;

if ($result == 1) {
    echo "<br>", $result, " quociente impar";
} else {
    echo "<br>", $result, "quociente de par.";
}
?>