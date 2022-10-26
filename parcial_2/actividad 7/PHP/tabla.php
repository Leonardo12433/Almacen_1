<?php
echo "llamdo a tabla";
if($_GET){
$fila=$_GET['fila'];
$columnas=$_GET['colum'];
echo "metodo get";
if($fila&&$columnas){

    echo "<center>";
    echo "<table algin:'center' borde='1px'>";

    for($fil=1; $fil <=$_GET['fila']; $fil++){
    echo "<tr>";
    for($col=1; $col<=$_GET['colum']; $col++){
        echo "<td>";
        echo "$fil$col";
    echo "</td>";
     

}
echo "</tr>";
    }
    echo "</table>";
    echo  "</center>";
}

}
?>