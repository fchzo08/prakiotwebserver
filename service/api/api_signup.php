<?php
header("Content-Type: application/json");

// Pastikan metode yang digunakan adalah POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari permintaan POST
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['device_id'])) {
        include "../database/device.php";
        if (UpdateStatus($data['device_id']) == 1) {
            echo json_encode(["status" => 200, "message" => "Device is registered now."]);
        }
    } else {
        echo json_encode(["status" => 400, "message" => " Invalid Data"]);
    }
    // Lakukan sesuatu dengan data (contoh: menyimpan ke database)
    // ...
} else {
    // Jika bukan metode POST, kirim respons kesalahan
    http_response_code(405); // Method Not Allowed
    echo json_encode(["status" => "error", "message" => "Metode yang tidak diizinkan"]);
}
