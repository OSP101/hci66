<?php

// Run dev
$servername = "localhost";
$username = "root";
$password = "";
$database = "hci66";

// Producion
// $servername = "localhost";
// $username = "root";
// $password = "543021264-9";
// $database = "hci66";


// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $database);

$conn->query("set character set utf8");
// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
} 
?>
