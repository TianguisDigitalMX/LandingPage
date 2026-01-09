<?php
// Incluye la librería
include "lib/phpqrcode/phpqrcode.php";

// Texto o URL que quieres codificar
$data = "https://mitd.cc";

// Nombre del archivo temporal del QR
$filename = "qr.png";

// Generar QR con nivel de corrección H (alto)
QRcode::png($data, $filename, QR_ECLEVEL_H, 10, 2);

// Cargar QR y logo
$QR = imagecreatefrompng($filename);
$logo = imagecreatefrompng("logo.png"); // tu logo en PNG

// Obtener tamaños
$QR_width = imagesx($QR);
$QR_height = imagesy($QR);

$logo_width = imagesx($logo);
$logo_height = imagesy($logo);

// Escalar logo (aprox. 20% del QR)
$logo_qr_width = $QR_width / 5;
$scale = $logo_width / $logo_qr_width;
$logo_qr_height = $logo_height / $scale;

// Crear imagen redimensionada
$logo_resized = imagecreatetruecolor($logo_qr_width, $logo_qr_height);
imagealphablending($logo_resized, false);
imagesavealpha($logo_resized, true);
imagecopyresampled($logo_resized, $logo, 0, 0, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

// Insertar logo en el centro del QR
$pos_x = ($QR_width - $logo_qr_width) / 2;
$pos_y = ($QR_height - $logo_qr_height) / 2;
imagecopy($QR, $logo_resized, $pos_x, $pos_y, 0, 0, $logo_qr_width, $logo_qr_height);

// Guardar QR final
imagepng($QR, "qr_con_logo.png");

// Mostrar directamente en navegador
header("Content-Type: image/png");
imagepng($QR);

// Liberar memoria
imagedestroy($QR);
imagedestroy($logo);
imagedestroy($logo_resized);
?>