
<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Мои заявки</h1>

        <div class="card">
            <form action="create_request.php" method="POST">
                <input type="text" name="device" placeholder="Устройство" required>
                <textarea name="problem" placeholder="Описание проблемы"></textarea>
                <button type="submit">Создать заявку</button>
            </form>
        </div>

        <?php
        $requests = $conn->query("SELECT * FROM requests WHERE user_id='$user_id'");

        while ($row = $requests->fetch_assoc()) {
            echo "<div class='card'>";
            echo "<h3>" . $row['device'] . "</h3>";
            echo "<p>" . $row['problem'] . "</p>";
            echo "<p>Статус: " . $row['status'] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
