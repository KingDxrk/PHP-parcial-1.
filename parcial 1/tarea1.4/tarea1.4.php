<html>
<body>
    <head>
        <link rel="stylesheet" href="stilos.css">
    </head>
<h2>Problemas de la tarea 1.4 <hr></h2>
<h3>Mayor de 3 numeros</h3>
<h2>Descripcion</h2>
<p>Realiza un problema que imprima el mayor de tres números.</p>
<h2>Entrada</h2>
<p>Escribe 3 numeros enteros a,b,c</p>
<h2>Salida</h2>
<p>El número entero mayor de los tres números introducidos.</p>
<h2>Ejemplo</h2>
<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>10 <br>
                8  <br>
               -7
            </td>
            <td>10</td>
        </tr>
        <tr>
            <td>10<br>
                81<br>
                101
            </td>
            <td>101</td>
        </tr>
        <tr>
            <td>11 <br>
                11 <br>
                11
            </td>
            <td>11</td>
        </tr>
        <tr>
            <td>10 <br>
                810 <br>
                101
            </td>
            <td>810</td>
        </tr>
    </table>
</table>
<h2>Resultado</h2>
<?php
//PRIMER CODIGO
$a=10;
$b=8;
$c=-7;
if($a>$b and $a>$c)
{
echo "El mayor es: ", $a, "<HR>";
}
?>
<h3>¿Cuanto vale 7?</h3>
<h2>Descripcion</h2>
<p>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7</p>
<h2>Entrada</h2>
<p>Dos enteros en el rango  -1000 a +1000</p>
<h2>Salida</h2>
<p>La cantidad de enteros iguales a 7.</p>
<h2>Ejemplo</h2>
<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>-3 8 <br>
            <td>0</td>
        </tr>
        <tr>
            <td>7 57 <br>
            <td>1</td>
        </tr>
        <tr>
            <td>62 7 <br>
            <td>1</td>
        </tr>
        <tr>
            <td>7 7<br>
            <td>2</td>
        </tr>
    </table>
</table>
<h2>Resultado</h2>
<?php
//SEGUNDO CODIGO
$x=7;
$y=1;
if($x=7 or $y==57)
{
echo "La cantidad de 7s que hay son: ", $y, "<hr>";
}
?>
<html>
<body>
<h1>Estaciones del Año</h1>

<h2>Descripción</h2>
Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día
 y un mes
 según lo siguiente:
Winter del 21 de diciembre al 20 de marzo
Spring del 21 de marzo al 21 de junio
Summer del 22 de junio al 22 de septiembre
Fall del 23 de septiembre al 20 de diciembre
Considerando la siguiente cantidad de días para cada mes:

<h2>Entrada</h2>
Dos números enteros d y m ,separados por un espacio que corresponden al día y mes de una fecha determinada

<h2>Salida</h2>
Una cadena s que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida

<h2>Ejemplo</h2>
<table border="1">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td> 15 10</td>
            <td>Fall</td>
        </tr>
        <tr>
            <td> 22 3</td>
            <td>spring</td>
        </tr>
        <tr>
            <td> 31 4</td>
            <td>no existe la fecha</td>
        </tr>
    </table>
</table>
<h2>Resultado</h2>
<?php
$dia=7;
$mes=9;
if ($mes == 1) 
{ 
    if ($dia >= 21)
    {
       echo "Winter";
     }
} 
elseif ($mes == 2) 
{ 
    echo "Winter";
} 
elseif ($mes == 3) 
{ 
if ($dia <= 20)
{
 echo "Winter";
 } else 
    {
        echo "Spring";
    }
} 
elseif ($mes == 4) 
{ 
        echo "Spring";
}
elseif ($mes == 5) 
{ 
    echo "Spring";
} 
elseif ($mes == 6) 
{ 
if ($dia <= 21) 
    {
        echo"Spring";
    } else 
{
    echo "Summer";
}
} elseif ($mes == 7) 
{ 
    echo "Summer";
} 
elseif ($mes == 8) 
{ 
    echo "Summer";
} 
elseif ($mes == 9) 
{ 
    if ($dia <= 22)
        {
            echo "Summer";
        } 
    else {
            echo "Fall";
        }
     } 
     elseif ($mes == 10)
      { 
    echo "Fall";
    } 
    elseif ($mes == 11) 
    { 
        echo "Fall";
    } 
    elseif ($mes == 12)
     { 
        if ($dia <= 20) 
        {
            echo "Fall";
        }
    }
else 
{
  echo "la fecha no existe";
}
?>

</body>
</html>
