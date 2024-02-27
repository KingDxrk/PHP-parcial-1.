<html>
<body>
<h1>Trabajo con foreach</h1>
<h2>Indicaciones</h2>
<p>CREAR UN ARREGLO ASOCIATIVO CON: <BR>
    -NOMBRES Y EDADES DE AL MENOS 5 ALUMNOS <BR>
    -IMPRIMIR EL ARREGLO CON VAR_DUMP <BR>
    -LUEGO IMPRIMIR CADA ELEMENTO CON FOREACH
</p>
<H3>El trabajo:</H3>
<?php
//ARREGLO ASOCIATITVO DE 5 ALUMNOS
$personas=array
(
"Pedro"=>array
(
"edad"=>17,
),
"Juan"=>array
(
    "edad"=>18,
),
"Maria"=>array
(
"edad"=>15,
),
"Rafa"=>array
(
    "edad"=>16,
),
"Angel"=>array
(
    "edad"=>19,
),
);
//IMPRIMISION CON VAR_DUMP
echo "La imprimision con var_dump es: <br>";
echo var_dump($personas);
echo "<hr>";
//FOREACH
$personas="17,18,15,15,29";
$personas=explode(",", $personas);
echo "Las edades con foreach son: <br>";
foreach($personas as $edad)
{
    echo "edad: " . $edad . "<BR>";
}
?>

</body>
</html>