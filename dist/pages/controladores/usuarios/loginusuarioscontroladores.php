<?php
include_once "./controladores/db_connect.php";
session_start();

$errorlogin = false;
echo "Login Usuarios";
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["entrar"])) {

    $email = sanitizar($conexion, $_REQUEST["email"]);
    $clave = hash("sha256", sanitizar($conexion, $_REQUEST["clave"]));
    try {
        $query = "SELECT * FROM usuarios WHERE email = '$email' AND clave = '$clave'";
        $resultset = mysqli_query($conexion, $query);
        $row = $resultset->fetch_assoc();
        if ($row) {
            $_SESSION["id"] = $row["id"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["nombre"] = $row["nombre"];
            $_SESSION["tipo"] = $row["tipo"];
            
            header("location:./index.php");
        }
        else {
            $errorlogin = true;
            echo "<div class=alert alert-danger>Error: Usuario o contraseña incorrecta</div>";
        }
    } catch (mysqli_sql_exception $e) {
        echo "<div class= alert alert-danger> El Usuario No Existe.</div>";
    }
}

?>

