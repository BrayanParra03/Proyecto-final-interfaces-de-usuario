<?php

include_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../agendar.php?error=metodo_no_permitido");
    exit();
}

$nombre = trim($_POST['nombre'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$servicio = trim($_POST['servicio'] ?? '');
$fecha = trim($_POST['fecha'] ?? '');
$hora = trim($_POST['hora'] ?? '');
$tipo_consulta = trim($_POST['tipo_consulta'] ?? '');
$ubicacion = trim($_POST['ubicacion'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

$campos_requeridos = ['nombre', 'email', 'telefono', 'servicio', 'fecha', 'hora', 'tipo_consulta'];
foreach ($campos_requeridos as $campo) {
    if (empty($$campo)) {
        header("Location: ../agendar.php?error=campos_requeridos&campo=" . $campo);
        exit();
    }
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../agendar.php?error=email_invalido");
    exit();
}

$fecha_actual = date('Y-m-d');
if ($fecha < $fecha_actual) {
    header("Location: ../agendar.php?error=fecha_pasada");
    exit();
}

try {
    $database = new Database();
    $db = $database->getConnection();
    
    // Preparar consulta SQL
    $sql = "INSERT INTO citas (nombre, email, telefono, servicio, fecha, hora, tipo_consulta, ubicacion, mensaje, estado) 
            VALUES (:nombre, :email, :telefono, :servicio, :fecha, :hora, :tipo_consulta, :ubicacion, :mensaje, 'pendiente')";
    
    $stmt = $db->prepare($sql);
    
    $hora_completa = $hora . ':00'; 
    
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':servicio', $servicio);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':hora', $hora_completa);
    $stmt->bindParam(':tipo_consulta', $tipo_consulta);
    $stmt->bindParam(':ubicacion', $ubicacion);
    $stmt->bindParam(':mensaje', $mensaje);
    
    if ($stmt->execute()) {
        $cita_id = $db->lastInsertId();
        
        $googleCalendarLink = generarEnlaceGoogleCalendar($nombre, $fecha, $hora, $servicio, $mensaje);
        
        error_log("Cita agendada - ID: $cita_id, Email: $email, Fecha: $fecha $hora");
        
        header("Location: ../agendamiento_exitoso.php?id=" . $cita_id);
        exit();
        
    } else {
        throw new Exception("Error al ejecutar la consulta");
    }
    
} catch (PDOException $e) {
    error_log("Error de base de datos: " . $e->getMessage());
    header("Location: ../agendar.php?error=bd_error&mensaje=" . urlencode($e->getMessage()));
    exit();
    
} catch (Exception $e) {
    error_log("Error general: " . $e->getMessage());
    header("Location: ../agendar.php?error=general");
    exit();
}

function generarEnlaceGoogleCalendar($nombre, $fecha, $hora, $servicio, $mensaje) {
    
    $start_datetime = $fecha . "T" . $hora . ":00";
    $end_hora = intval(substr($hora, 0, 2)) + 1;
    $end_hora = str_pad($end_hora, 2, '0', STR_PAD_LEFT) . substr($hora, 2);
    $end_datetime = $fecha . "T" . $end_hora . ":00";
    
    
    $start_time = str_replace(['-', ':'], '', $start_datetime);
    $end_time = str_replace(['-', ':'], '', $end_datetime);
    
    
    $titulo = "Consulta Veterinaria - " . ucfirst($servicio);
    $detalles = "Paciente: " . $nombre . "\\n";
    $detalles .= "Servicio: " . $servicio . "\\n";
    $detalles .= "Mensaje: " . $mensaje . "\\n\\n";
    $detalles .= "Agendado desde Reprocow";
    
    
    $params = [
        'action' => 'TEMPLATE',
        'text' => $titulo,
        'dates' => $start_time . '/' . $end_time,
        'details' => $detalles,
        'location' => 'Consulta Veterinaria Reprocow',
        'sf' => 'true',
        'output' => 'xml'
    ];
    
    $url = 'https://calendar.google.com/calendar/render?' . http_build_query($params);
    return $url;
}

?>