<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop1";

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Tạo bảng users
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    fullname VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Bảng users đã được tạo hoặc đã tồn tại.";
} else {
    echo "Lỗi khi tạo bảng users: " . $conn->error;
}

$conn->close();
?>
