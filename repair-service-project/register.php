
<?php
include 'db.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$check = $conn->query("SELECT * FROM users WHERE login='$login'");

if ($check->num_rows > 0) {
    echo "Логин уже существует";
} else {
    $sql = "INSERT INTO users(full_name, login, email, phone, password)
            VALUES('$full_name', '$login', '$email', '$phone', '$password')";

    if ($conn->query($sql)) {
        echo "Регистрация успешна";
    } else {
        echo "Ошибка";
    }
}
?>
