
<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];
$device = $_POST['device'];
$problem = $_POST['problem'];

$sql = "INSERT INTO requests(user_id, device, problem)
        VALUES('$user_id', '$device', '$problem')";

if ($conn->query($sql)) {
    header("Location: dashboard.php");
} else {
    echo "Ошибка";
}
?>
