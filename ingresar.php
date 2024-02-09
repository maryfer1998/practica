<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingresar Producto</title>
    <link href="./estilos.css/estilos.css" rel="stylesheet" type="text/css">
        </link>
</head>
<body>
    <header></header>
    <main>
        <form action="Modelo.php" method="POST">

            <h2>Registra el Producto</h2>
        
                <label for="codigo">
                    Codigo del Producto:
                </label>
                <input id="codigo" name="codigo" type="text">
                    <br></br>

                    <label for="nombre">
                    Nombre del Producto:
                </label>
                <input id="nombre" name="nombre" type="text">
                    <br></br>
                <label for="tipo">
                        Tipo de producto:
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
                    <br></br>
                    <label for="precio">
                        Precio del Producto
                    </label>
                    <input id="precio" name="precio" type="precio">
                        <br></br>
                        <label for="cantidad">
                            Cantidad:
                        </label>
                        <input id="cantidad" name="cantidad" type="text">
                            <br></br>


                    <label for="fechaVencimiento">
                            Fecha de Vencimiento:
                        </label>
                        <input id="fechaVencimiento" name="fechaVencimiento" type="date">
                            <br/>

                            <div class="button-container">
                            <input type="hidden" name="operacion" id="operacion" value="ingresar">
                            <input type="submit" value="Enviar Datos">
                <!-- Botón de Menú Principal como enlace -->
                            <a href="index.php"><button type="button" class="button">Regresar al Menú Principal</button></a>
            </div>
                            </input>
                        </input>
                    </input>
                </input>
            </form>
    </main>
    <footer></footer>
</body>
</html>
