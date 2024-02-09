
<?php
include('Inventario.php');



$conexion = new ConexionDB();
$inventario = new Inventario($conexion);

if(!empty($_POST['operacion'])){
    $codigo=$_POST['codigo'];
    $operacion=$_POST['operacion'];

if ($operacion == "eliminar") {
    $codigo=$_POST['codigo'];
    $inventario->setCodigo("$codigo");
    $inventario->eliminarProducto();
}
if($operacion=="ingresar"){
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $fechaVencimiento=$_POST['fechaVencimiento'];
    $inventario->setCodigo("$codigo");
    $inventario->setNombre("$nombre");
    $inventario->setTipo("$tipo");
    $inventario->setPrecio((float)"$precio");
    $inventario->setCantidad("$cantidad");
    $inventario->setFechaVencimiento(new DateTime("$fechaVencimiento"));
$inventario->ingresarProducto();
}

if ($operacion == "actualizar") { 
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $fechaVencimiento=$_POST['fechaVencimiento'];
    $inventario->setCodigo("$codigo");
    $inventario->setNombre("$nombre");
    $inventario->setTipo("$tipo");
    $inventario->setPrecio((float)"$precio");
    $inventario->setCantidad("$cantidad");
    $inventario->setFechaVencimiento(new DateTime("$fechaVencimiento"));
$inventario->actualizarProducto();

    }

}else{


    $arreglo=$inventario->listar();

    }
?>


