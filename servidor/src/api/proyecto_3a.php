<?php


// 检查连接是否成功
/*if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 设置字符集
mysqli_set_charset($conn, "utf8");

echo "成功连接到数据库";*/

if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $servername = "127.0.0.1"; // 数据库服务器地址
        $username = "root"; // 替换为您的数据库用户名
        $password = ""; // 替换为您的数据库密码
        $database = "proyecto_3a"; // 数据库名称
        
        // 创建数据库连接
        $conn = new mysqli($servername, $username, $password, $database);

        

        $Nombre = $_POST['Nombre'];
        $Email = $_POST['Email'];
        $Telefono = $_POST['Telefono'];

        $query = "INSERT INTO usuarios (Nombre, Email, Telefono) VALUES ('$Nombre', '$Email', '$Telefono')";

        $result = $mysql->query($query);

        if($result == true)
        {
            echo "El usuario se creo coreectamente";
        }else
        {
            echo "Error";
        }

        $mysql->close();
    }
?>
