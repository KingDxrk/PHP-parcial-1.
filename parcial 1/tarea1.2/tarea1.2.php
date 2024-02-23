<html>
<head>

</head>
<body>
<h1>12618. PRACTICANDO CON FORMULAS</h1>

<h2>Descripci�n</h2>
Dado un valor real a, quieres 
resolver una serie de ecuaciones 
hasta obtener el valor de z.

<h2>Entrada</h2>
Una real a.

<h2>Salida</h2>
Un real que sea el valor de "z" 
impreso con tres puntos decimales.




<h2>Ejemplo</h2>
<h3>Entrada Salida</h3>
<table border="2" cellpadding="4">
<tr>
    <td>33.562</td>
    <td>0.148</td>
</tr>
<tr>
    <td>72.569</td>
    <td>0.069</td>
</tr>
<tr>
    <td>64.835</td>
    <td>0.077</td>
</tr>
</table>
<br>
<br>
<h3>OPERACIONES</h3>
<?php
# CODIGO PHP 
$a=33.562;
$x=(3*$a)+15;
$y=($x+3)/($x+1);
$z=($x*5)+($y*7)/($a*$x*$y);
echo "<br>";
echo "Variable: <br>";
echo "a: ", $a, "<br>";
echo "Resultado: ", $z,"<br>";

?>
</body>
</html>
