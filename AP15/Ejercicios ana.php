<?php
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
    
<?php echo animalList($valores)?>

</body>
</html>