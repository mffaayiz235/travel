<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $train_no = $_POST['train_no'];
    $passenger_name = $_POST['passenger_name'];
    $sql = "INSERT INTO reservations (train_no, passenger_name) VALUES ('$train_no', '$passenger_name')";
    if ($conn->query($sql) === TRUE) {
        echo "Ticket Reserved Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>