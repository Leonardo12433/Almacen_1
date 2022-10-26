<?php
$tabla=$_POST['tabla'];
$nmaximo=$_POST['maximo'];
$multiplicador = 1;

while($multiplicador <= $nmaximo){
    echo "<p> {$tabla} * {$multiplicador} = ". $tabla * $multiplicador."</p>";
    $multiplicador++;
}
?>