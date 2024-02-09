<?php
include('Conexion.php');

class Inventario {
    private string $codigo; 
    private string $nombre;
    private string $tipo;
    private float $precio;  
    private string $cantidad;
    private DateTime $fechaVencimiento;

    private $conexion; 

    public function __construct(ConexionDB $conexionDB)
    {
        $this->conexion = $conexionDB->conectar();
    }

    public function setCodigo(string $codigo): void {
        $this->codigo = $codigo;
    }

    public function getCodigo(): string {
        return $this->codigo;
    }

    public function setNombre(string $nombre): void {
        $this->nombre= $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setTipo(string $tipo): void {
        $this->tipo = $tipo;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

    public function setPrecio(float $precio): void {
        $this->precio = $precio;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function setCantidad(string $cantidad): void {
        $this->cantidad = $cantidad;
    }

    public function getCantidad(): string {
        return $this->cantidad;
    }

    public function setFechaVencimiento(DateTime $fechaVencimiento): void {
        $this->fechaVencimiento = $fechaVencimiento;
    }

    public function getFechaVencimiento(): DateTime {
        return $this->fechaVencimiento;
    }

    public function ingresarProducto() {
        try {
            $stm = $this->conexion->prepare('INSERT INTO productos (codigo, nombre, tipo, precio, cantidad, fechaVencimiento) VALUES(?,?,?,?,?,?)');
            $stm->execute([$this->codigo, $this->nombre, $this->tipo, $this->precio, $this->cantidad, $this->fechaVencimiento->format('Y-m-d')]);
            $count = $stm->rowCount();
            echo $this->columnasAfectas($count);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    private function columnasAfectas($count): string {  
        if ($count !== null && $count > 0) {
            $msm = "Operación realizada correctamente";
            $msm .= "<br><br><button style='background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;' onclick='window.location.href=\"menu.php\"'>Volver al Menú</button>";
        } else {
            $msm = "Error, revise la conexión con su DB";
        }                               
        return $msm;
    }

    public function actualizarProducto() {
        try {
            $stmt = $this->conexion->prepare('UPDATE productos SET nombre=?, tipo=?, precio=?, cantidad=?, fechaVencimiento=? WHERE codigo=?');
            $stmt->execute([$this->nombre, $this->tipo, $this->precio, $this->cantidad, $this->fechaVencimiento->format('Y-m-d'), $this->codigo]);
            $rowCount = $stmt->rowCount();
            echo $this->columnasAfectas($rowCount);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function eliminarProducto() {
        try {
            $stmt = $this->conexion->prepare('DELETE FROM productos WHERE codigo=?');
            $stmt->execute([$this->codigo]);
            $rowCount = $stmt->rowCount();
            echo $this->columnasAfectas($rowCount);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


 public function listar(){
    try {
        $sql = "SELECT * FROM productos";
        $stmt = $this->conexion->query($sql);
        $licor = $stmt->fetchAll(); 

        $licores = array();
        $m = 0;

        foreach ($licor as $key => $value) {

            $licores['licor'.$m]['codigo'] = "{$value['codigo']}";
            $licores['licor'.$m]['nombre'] = "{$value['nombre']}";
            $licores['licor'.$m]['tipo'] = "{$value['tipo']}";
            $licores['licor'.$m]['precio'] = "{$value['precio']}";
            $licores['licor'.$m]['cantidad'] = "{$value['cantidad']}";
            $licores['licor'.$m]['fechaVencimiento'] = "{$value['fechaVencimiento']}";
            $m++;
        }
   
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

        echo "<h1>Productos en Stock</h1>";

        echo "<table border='1'>
        <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Fecha Vencimiento</th>
        </tr>";
        foreach ($licores as $key => $value) {
            echo "<tr>";
            echo "<td>{$value['codigo']}</td>";
            echo "<td>{$value['nombre']}</td>";
            echo "<td>{$value['tipo']}</td>";
            echo "<td>{$value['precio']}</td>";
            echo "<td>{$value['cantidad']}</td>";
            echo "<td>{$value['fechaVencimiento']}</td>";
            echo "</tr>";
        }
         echo "</table>";
        echo "<button onclick='window.location.href=\"menu.php\"'>Ir al Menú Principal</button>";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


}


?>

