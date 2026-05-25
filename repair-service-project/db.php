
<?php
$conn = new mysqli("localhost", "root", "", "repair_service");

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
