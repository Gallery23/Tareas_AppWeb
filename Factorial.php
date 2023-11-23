<?php 
Function Factorial ($num) {
    $Factorial = 1;
    $Contador = 1;
    WHILE ($Contador <= $num) {
    $Factorial = $Factorial * $Contador;
    $Contador++;
}
    return $Factorial;

}

for ($Indice = 1; $Indice<= 20; $Indice++) {
echo "Factorial de ".$Indice." es: ".Factorial($Indice)."<br>";


}
?>