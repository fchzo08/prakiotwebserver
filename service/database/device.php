<?php
function RegisterDevice(string $id) //untuk insert data ke database, dilakukan admin page.
{
    $query = "INSERT INTO device (device_id) VALUES('$id')";
    include "database.php";
    $sql = mysqli_query($con, $query);
}

function isDeviceRegister(string $id) // untuk memeriksa apakah sebelumnya device sudah terdaftar atau belum. Untuk ke IOT Device.
{
    include "database.php";
    $query = "SELECT status FROM device WHERE device_id = '$id'";

    $sql = mysqli_query($con, $query);

    $data = mysqli_fetch_assoc($sql);

    return $data["status"];
}

function UpdateStatus(string $id) //untuk user validasi perangkat di web.
{
    include "database.php";
    $query = "UPDATE device SET status = TRUE where device_id = '$id'";
    $sql = mysqli_query($con, $query);
    return true;
}
