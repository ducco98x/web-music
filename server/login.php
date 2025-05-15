<?php
include 'config.php';

$data = json_decode(file_get_contents("php://input"), true);
$username = $data['username'];
$password = $data['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    echo json_encode(["message" => "Đăng nhập thành công!"]);
} else {
    echo json_encode(["message" => "Tên đăng nhập hoặc mật khẩu sai."]);
}
$conn->close();
?>
