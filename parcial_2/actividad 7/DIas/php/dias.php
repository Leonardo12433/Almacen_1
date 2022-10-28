<?php
$edad=$_GET['edad'];
if(isset($_GET['edad'])){
    $edad=$edad*365;
    echo "<h3 style='text-align:center;'>los dias vividos son $edad</h3>";
}
?>