
<?php
include 'db.php';

$result = $conn->query("SELECT * FROM requests");

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h3>" . $row['device'] . "</h3>";
    echo "<p>" . $row['problem'] . "</p>";
    echo "<p>Статус: " . $row['status'] . "</p>";
    echo "</div>";
}
?>
