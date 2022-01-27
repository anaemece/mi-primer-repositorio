<?php
//EJERCICIO1
$valores = ["tortuga", "perro", "gato"];

function animalList($valores){
    $imprime=""; //creamos esta variable para no hacer echo constantemente y solo sacarlo en la llamada a funcion
    $imprime=$imprime."<ol>";
    for($i=0;$i<count($valores);$i++){ 
        $imprime.="<li>";
        $imprime.=$valores[$i]; //.= recordatorio (es como pone $imprime=$imprime.concatenoConAlgo)
        $imprime.="</li>";
    } 
    $imprime.="</ol>"; 
    return $imprime;
}
  
/*sin variable $imprime

function animalList($valores){
    echo "<ol>";
    for($i=0;$i<count($valores);$i++){ 
        echo "<li>".$valores[$i];
        echo "</li>";
    } 
   echo "</ol>"; 
}
*/
?>

<?php
//EJERCICIO2
function tabla($numero){
    echo "<table>";
    for($i=0;$i<=10;$i++){
        echo"<tr>";
        echo "<td>";
        echo $numero."X".$i;
        echo "</td>";
        echo "<td>";
        echo $numero*$i;
        echo "</td>";
        echo "</tr>";
 }
  echo "</table>";
}
?>

<?php
//EJERCICIO 3
function tablaDos($filas,$columnas){
    echo "<table>";
    for($i=0;$i<$filas;$i++){
        echo "<tr>";
        for($j=0;$j<$columnas;$j++){
            echo "<td>";
            echo (rand(1,99));
            echo "</td>";
        }
        echo "</tr>";
    }
  echo "</table>";
}
?>

<?php
//EJERCICIO 4 ¿como meter color en el background si no es en <style>?
function tablaColor($filas,$columnas){
    echo "<table>";
    for($i=0;$i<$filas;$i++){
        echo "<tr>";
        for($j=0;$j<$columnas;$j++){
            echo "<td>";
            echo (rand(1,99));
            echo "</td>";
        }
        echo "</tr>";
    }
  echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <style>
        table,td,th{
            border-collapse:collapse;
            border:1px solid black;
        }
        td{
            padding:0.2em 1em 0.2em 1em;
        }
        div{
            margin:10px;
        }
    </style>
</head>
<body>
    
<?php echo animalList($valores) // ejercicio1 ?><br><br>

<?php echo tabla(3) //ejercicio2 ?><br><br>

<?php echo tablaDos(2,2) //ejercicio3 ?><br><br>

<?php echo tablaColor(3,4) //ejercicio4 ?><br><br>

</body>
</html>