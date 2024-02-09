<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <title>
                   Quitar Productos
                </title>
                <link href="./estilos.css/estilos.css" rel="stylesheet" type="text/css">
        </link>
            </meta>
        </meta>
    </head>
    <body>
        <header>
        </header>
        <main>
            <form action="Modelo.php" method="POST">
                <h2>Quitar el Producto </h2>
                <label for="codigo">
                    Codigo:
                </label>
                <input id="codigo" name="codigo" required="" type="text">
                    <br>
                
                    <input id="operacion" name="operacion" type="hidden" value="eliminar">
                        <div class="button-container">
                            <input type="hidden" name="operacion" id="operacion" value="eliminar">
                            <input type="submit" value="Enviar Datos">
                <!-- Botón de Menú Principal como enlace -->
                            <a href="menu.php"><button type="button" class="button">Regresar al Menú Principal</button></a>
            </div>
                    </input>
                </input>
            </form>
        </main>
        <footer>
        </footer>
    </body>
</html>