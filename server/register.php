<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"), true);
$username = $data['username'];
$password = password_hash($data['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Đăng ký thành công!"]);
} else {
    echo json_encode(["message" => "Lỗi khi đăng ký."]);
}
$conn->close();
?>
