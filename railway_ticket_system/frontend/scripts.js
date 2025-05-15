function checkAvailability() {
    fetch('../backend/check_seat_availability.php')
    .then(response => response.text())
    .then(data => alert(data));
}