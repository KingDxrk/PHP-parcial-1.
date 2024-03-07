<html>
<head>
</head>
<body>
<h1>Sumando dos conjuntos</h1>

<h2>Descripción</h2>
Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4:
2 3 4 5
6 7 1 3
El resultado de sumarlos es:
8 10 5 8
<h2>Entrada</h2>
En la primera línea el entero N. En la segunda línea, separados por un espacio, los números del primer conjunto.
 En la tercera línea también separados por un espacio, los números del segundo conjunto.
<h2>Salida</h2>
Los números resultantes de sumar ambos conjuntos, separados por un espacio.
<h2>Ejemplo</h2>
<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Descripción</th>
        <tr>
            <td> 4 <br>
               2 3 4 5 <br>
               6 7 1 3 
            </td>
            <td>8 10 5 8</td>
            <td>2+6, 3+7, 4+1, 5+3.</td>
        </tr>
        </tr>
       
    </table>
</table>
<!-- codigo de php -->
<?php
// Definimos n como 4
$n = 4;
$con1 = explode(' ', "2 3 4 5");
$num1 = array_map('intval', $con1);
$con2 = explode(' ', "6 7 1 3");
$num2 = array_map('intval', $con2);
$resultado = array();
for ($i = 0; $i < $n; $i++) {
    $resultado[] = $num1[$i] + $num2[$i];
}
echo implode(' ', $resultado);
?>