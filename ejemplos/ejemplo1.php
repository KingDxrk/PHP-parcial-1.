<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Arreglo asociativos(ejemplo 1)</h3>
<?php
$personas=array
(
"Pedro"=>array
(
"edad"=>17,
"peso"=>60,
"semestre"=>4
),
"Maria"=>array
(
    "edad"=>18,
    "peso"=>52,
    "semestre"=>6
),
);
//datos de pedro
echo "edad de Pedro: " . $personas["Pedro"]["edad"]; echo "<br>";
echo "peso de Pedro: " . $personas["Pedro"]["peso"]; echo "<br>";
echo "semestre de Pedro: " . $personas["Pedro"]["semestre"]; echo "<HR>";
//Datos de maria
echo "Edad de Maria: " . $personas["Maria"]["edad"]; echo "<br>";
echo "Peso de Maria: " . $personas["Maria"]["peso"]; echo "<br>";
echo "Semestre de Maria: " . $personas["Maria"]["semestre"]; echo "<HR>";
//MOSTRAR LA ESTRUCTURA DEL ARREGLO
echo var_dump($personas);
echo "<HR>";
?>
<h3>Uso de explode(ejemplo2)</h3>
<?php
//USO DE EXPLODE
$lista_de_frutas="Fresa, Mango, Sandia";
$lista_frutas_array=explode(",", $lista_de_frutas);
var_dump($lista_de_frutas);
echo "<br>";
var_dump($lista_frutas_array);
echo "<HR>";
?>
<h3>Uso de foreach(Ejemplo3)</h3>
<?php
//RECORRER UN ARREGLO CON UN CICLO FOREACH
foreach($lista_frutas_array as $fruta)
{
    echo "fruta: " . $fruta . "<BR>";
}
?>
</body>
</html>