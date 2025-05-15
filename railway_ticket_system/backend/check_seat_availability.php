<?php
include 'db.php';
$sql = "SELECT COUNT(*) AS available_seats FROM reservations";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Available Seats: " . (100 - $row['available_seats']);
$conn->close();
?>