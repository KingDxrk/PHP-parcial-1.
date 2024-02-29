<html>
<head></head>
<body>
    <h1>IMPRIME NUMEROS PARES EN RANGO</h1>
    <form action="ejemplo6.php" method="post">
    Rango:
    <input type="text" name="txtRango1">   <input type="text" name="txtRango2"> <br>
    <input type="submit" value="Enviar"> <br>
    </form>
<?php
//CODIGO PHP
$x;
$y;
if($_POST)
{
    $x=$_POST['txtRango1'];
    $y=$_POST['txtRango2']; 
    for($i=$x; $i<=$y; $i++)
    {
      if($i%2==0)
      {
        echo "numeros pares: " . $i . "<br>";
      }
    }
}

?>
</html>
</body>
