<?php
$servername = 'p:localhost';
$database = 'EasyIMG';
$username = 'root';
$password = 'root';

// 创建连接
$conn = new mysqli($servername, $username, $password, $database);
// 检测连接
if($conn->connect_error) {
    die('数据库连接失败');
}