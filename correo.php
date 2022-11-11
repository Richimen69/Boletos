<?php 
$name = $_GET['name'];
$rfc = $_GET['rfc'];
$correo = $_GET['correo'];
$tipo = $_REQUEST['tipo'];
$cantidad = $_REQUEST['cantidad'];
$total;
$costo;
$asunto = "Gracias por su compra";
if($tipo == "a"){
    $costo = 300;
    $total = $cantidad * 300;
}
else if($tipo == "b"){
    $costo = 200;
    $total = $cantidad * 200;
}
else if($tipo == "c"){
    $costo = 100;
    $total = $cantidad * 100;
}
$cuerpo = "Hola  el tipo de boleto que adquirio fue tipo: "+$tipo+" con un costo de: "+$costo+". La cantidad de boletos: " +$cantidad+" con un total de: "+$total;
$quienloenvia = "Richilin <richilin@gmail.com>";
mail($correo,$asunto,$cuerpo,$quienloenvia);
?>