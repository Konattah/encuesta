<?php
// Incluir el archivo de conexión
include 'conexion.php';

try {
    // Obteniendo todas las regiones
    $queryRegiones = $conexion->query("SELECT * FROM Regiones");

    // $regiones = [{id_region: Int, nombre_region: String}]
    $regiones = $queryRegiones->fetch_all(MYSQLI_ASSOC);

    // Devolver los datos como JSON
    header('Content-Type: application/json');
    echo json_encode($regiones);
} catch (Exception $e) {
    // Manejar errores
    echo json_encode(['error' => $e->getMessage()]);
} finally {
    // Cerrar la conexión si está abierta
    if (isset($conexion)) {
        $conexion->close();
    }
}
?>
