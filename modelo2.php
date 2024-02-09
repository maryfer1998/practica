<?php
include('usuarios.php');

$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';
$operacion = $_POST['operacion'] ?? '';

$conexion = new ConexionDB();
$usuario = new Usuarios($conexion);

if (!empty($_POST["operacion"])) {
    $operacion = $_POST["operacion"];

    if ($operacion == "ingresar") {
        $usuario->setNombre($nombre);
        $usuario->setEmail($email);
        $usuario->setContraseña($contraseña);
        $usuario->ingresarUsuarios();
        header('Location: Index.php');
        exit();
    } elseif ($operacion == "login") {
        $usuario->setEmail($email);
        $usuario->setContraseña($contraseña);
        $usuario->loginUsuarios();
    } 
} else {
    $usuarios = $usuario->mostrarUsuarios();
    echo "<style>
                table {
                    border-collapse: collapse;
                    width: 80%;
                    margin: 20px auto;
                }
                th, td {
                    padding: 10px;
                    text-align: left;
                    border: 1px solid #ddd;
                }
                th {
                    background-color: #f2f2f2;
                }
                h1 {
                    text-align: center;

                }
                button {
                    background-color: #4CAF50; /* Cambiar el color a tu preferencia */
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
            </style>";
    echo"<caption><a href='menu.php'>Regresar al menu principal</a></caption>";
    echo "<br>";
    echo "<br>";
    echo "Tabla de Usuarios";
    echo "<table border='1'>";
    echo "<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Contraseña</th>
    </tr>";

    foreach ($usuarios as $usu) {
        echo "<tr>";
        echo"<td>{$usu['id']}</td>";
        echo "<td>{$usu['nombre']}</td>";
        echo "<td>{$usu['email']}</td>";
        echo "<td>{$usu['contraseña']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}
$conexion->cerrarConexion();

