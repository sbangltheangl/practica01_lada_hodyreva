
<?php
session_start();
include 'db.php';

$login = $_POST['login'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE login='$login'");
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header("Location: dashboard.php");
} else {
    echo "Неверный логин или пароль";
}
?>
