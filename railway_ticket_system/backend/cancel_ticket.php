<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "DELETE FROM reservations WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Ticket Cancelled Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>