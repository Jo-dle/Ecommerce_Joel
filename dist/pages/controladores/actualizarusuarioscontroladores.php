<?php
include_once "db_connect.php";

$id = (int) sanitizar($conexion, $_REQUEST["id"]);

if (!$id) {
  echo '<div class="alert alert-danger">ID no válida.</div>';
  exit;
}

try {
    $query = "SELECT id, nombre, email, clave, tipo FROM usuarios WHERE id = ?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resulset = $stmt->get_result();
    $row = $resulset->fetch_assoc();
} catch (mysqli_sql_exception $e) {
    echo '<div class="alert alert-danger">Error:El Usuario No Existe ' . htmlspecialchars($e->getMessage()) . '</div>';
    exit;
}

if (isset($_REQUEST["actualizar"])) {
    try {
        $nombre = sanitizar($conexion, $_REQUEST["nombre"]);
        $email = sanitizar($conexion, $_REQUEST["email"]);
        $nueva_clave = trim($_REQUEST["clave"]);
        $tipo = sanitizar($conexion, $_REQUEST["tipo"]);

        $stmt_actual = $conexion->prepare("SELECT clave FROM usuarios WHERE id = ?");
        $stmt_actual->bind_param("i", $id);
        $stmt_actual->execute();
        $resulset = $stmt_actual->get_result();
        $row_actual = $resulset->fetch_assoc();
        $clave_actual = $row_actual["clave"];

        if (!empty($nueva_clave) && $clave_actual !== hash("sha256", $nueva_clave)) {
            $query = "UPDATE usuarios SET nombre = ?, email = ?, clave = SHA2(?, 256), tipo = ? WHERE id = ?";
            $stmt = $conexion->prepare($query);
            $stmt->bind_param("ssssi", $nombre, $email, $nueva_clave, $tipo, $id);
        } else {
            $query = "UPDATE usuarios SET nombre = ?, email = ?, tipo = ? WHERE id = ?";
            $stmt = $conexion->prepare($query);
            $stmt->bind_param("sssi", $nombre, $email, $tipo, $id);
        }

        if ($stmt->execute()) {
            echo "<script>window.location.href = 'index.php?modulo=usuarios&mensaje=Usuario actualizado con éxito';</script>";
            exit;
        }
    } catch (mysqli_sql_exception $e) {
        echo "<script>window.location.href = 'index.php?modulo=usuarios&mensaje=Error al actualizar usuario';</script>";
        exit;
    }
}
?>