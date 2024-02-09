<?php
include("conexion.php");

class Usuarios{
    private string $nombre;
    private string $email;
    private string $contraseña;
    private $conexion;

    public function __construct(ConexionDB $conexionDB) {
        $this->conexion = $conexionDB->conectar();
    }
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }
    public function getNombre(): string {
        return $this->nombre;
    }
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function setContraseña(string $contraseña): void {
        $this->contraseña = $contraseña;
    }
    public function getContraseña(): string {
        return $this->contraseña;
    }

    public function ingresarUsuarios() {
        try {
            $stm = $this->conexion->prepare("INSERT INTO usuarios (nombre, email, contraseña) VALUES (?,?,?)");
            $stm->execute(array($this->nombre, $this->email, $this->contraseña));
            $contador = $stm->rowCount();
            echo "{$this->columnasAfectas($contador)}";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function loginUsuarios() {
        try {
            $stm = $this->conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
            $stm->execute(array($this->email));
            $usuario = $stm->fetch(PDO::FETCH_ASSOC);
    
            if ($usuario && $this->contraseña == $usuario['contraseña']) {
                echo 'Login exitoso';
                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nombre'] = $usuario['nombre'];
                header('Location: menu.php');
            } else {
                echo 'Verifique su contraseña';
            }
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function mostrarUsuarios() {
        try {
            $sql = "SELECT * FROM usuarios";
            $stmt = $this->conexion->query($sql);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    private function columnasAfectas($contador): string {  
        if ($contador > 0) {
            $msm = "Operación realizada correctamente";
        } else {
            $msm = "Error, revise la conexión con su DB";
        }                               
        return $msm;
    }
}
