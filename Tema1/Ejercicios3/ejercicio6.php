<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
echo "Ordenado por nombre de pais:<br>";
$pila = array("España"=>"Madrid", "Francia"=>"Paris", "Alemania"=>"Berlin", "Italia"=>"Roma", "Portugal"=>"Lisboa");
ksort($pila);
foreach ($pila as $key => $val){
    echo "La capital de $key es $val<br>";
}
echo "<br>";
echo "Ordenado por nombre de pais y por nombre de la capital:<br>";
asort($pila);
foreach ($pila as $key => $val){
    echo "La capital de $key es $val<br>";
}
?>
</p> 
</body> 
</html> 