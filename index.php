<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="./estilos.css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <h2>Iniciar Sesión</h2>
    </header>
    <main>
        <section>
            <form action="modelo2.php" method="POST">
                <label for="email">Correo Electronico:</label>
                <input type="text" id="email" name="email" required><br><br>
                <label for="contraseña">Password:</label>
                <input type="password" id="contraseña" name="contraseña" required><br><br>
                <input name="operacion" type="hidden" id="operacion" value="login">
                <input type="submit" value="Ingresar"><br><br>
                <a href="registro.php">Registrarse</a>
            </form>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>
