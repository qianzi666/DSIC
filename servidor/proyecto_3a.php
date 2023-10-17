<?php
$servername = "localhost"; // 数据库服务器地址
$username = "root"; // 替换为您的数据库用户名
$password = ""; // 替换为您的数据库密码
$database = "proyecto_3a"; // 数据库名称

// 创建数据库连接
$conn = new mysqli($servername, $username, $password, $database);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 设置字符集
mysqli_set_charset($conn, "utf8");

echo "成功连接到数据库";
?>
