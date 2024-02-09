<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Usuarios</title>
    <link href="./estilos.css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <h2>Registro de Usuarios</h2>
    </header>
    <main>
        <section>
            <form action="modelo.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required><br><br>
                <label for="contraseña">Password:</label>
                <input type="password" id="contraseña" name="contraseña" required><br><br>
                <input name="operacion" type="hidden" id="operacion" value="ingresar">
                <input type="submit" value="Enviar Datos">
                <a href="index.php">Regresar al menu Principal</a>
            </form>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>