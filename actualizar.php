<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>Actualizar Producto</title>
        <link href="./estilos.css/estilos.css" rel="stylesheet" type="text/css">
        </link>
    </head>
    <body>
        <header>
        </header>
        <main>
            <form action="Modelo.php" method="POST">
                <h2>Actualizar el Producto del Inventario</h2>
                <label for="codigo">
                    Codigo del Producto a Actualizar:
                </label>
                <input id="codigo" name="codigo" type="text">
                    <br/>

                    <label for="nombre">
                    Nombre del Producto a Actualizar:
                </label>
                <input id="nombre" name="nombre" type="text">
                    <br/>

                <label for="tipo">
                        Tipo del producto:
                    </label>
                    <select id="tipo" name="tipo">
                        <option value="Cerveza">
                            Cerveza
                        </option>
                        <option value="Tequila">
                            Tequila
                        </option>
                        <option value="Whisky">
                            Whisky
                        </option>
                    </select>
                    <br/>
                    <label for="precio">
                        Precio
                    </label>
                    <input id="precio" name="precio" type="precio">
                        <br/>
                        <label for="cantidad">
                            Cantidad:
                        </label>
                        <input id="cantidad" name="cantidad" type="text">
                            <br/>


                    <label for="fechaVencimiento">
                            Fecha de Vencimiento:
                        </label>
                        <input id="fechaVencimiento" name="fechaVencimiento" type="date">
                            <br/>

                            <div class="button-container">
                            <input type="hidden" name="operacion" id="operacion" value="actualizar">
                            <input type="submit" value="Enviar Datos">
                <!-- Botón de Menú Principal como enlace -->
                            <a href="menu.php"><button type="button" class="button">Regresar al Menú Principal</button></a>
            </div>
                            </input>
                        </input>
                    </input>
                </input>
            </form>
        </main>
        <footer>
        </footer>
    </body>
</html>
