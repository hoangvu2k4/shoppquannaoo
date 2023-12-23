<?php
$servername = "localhost";
$username = "root";
$password = "";

// Kết nối đến MySQL
$conn = new mysqli($servername, $username, $password);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
}

// Tạo cơ sở dữ liệu
$sql = "CREATE DATABASE IF NOT EXISTS shop1";
if ($conn->query($sql) === TRUE) {
    echo "Cơ sở dữ liệu đã được tạo hoặc đã tồn tại.";
} else {
    echo "Lỗi khi tạo cơ sở dữ liệu: " . $conn->error;
}

$conn->close();
?>
