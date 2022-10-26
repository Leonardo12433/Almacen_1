<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Act color</title>
</head>
<body>
 <h1 id="header">Soy una simple página ᗜˬᗜ</h1>  
 <div class= "container">
 <div class="buttons">
<button id="btnrojo" style="background-color: Red;" onclick="rojo()">Red</button>
<button id="btnazul" style="background-color: Blue;" onclick="azul()">Blue</button>
<button id="btnamarillo" style="background-color: Yellow;" onclick="amarillo()">Yellow</button>
</div>
</div>
<script>
    function rojo(){
         //alert("Quieres cambiar de color?");
         document.getElementById("header").style.backgroundColor ="Red";
    } 

    function azul(){
         //alert("Quieres cambiar de color?");
         document.getElementById("header").style.backgroundColor ="Blue";
    }

    function amarillo(){
         //alert("Quieres cambiar de color?");
         document.getElementById("header").style.backgroundColor ="Yellow";
    }
</script>
</body>
</html>