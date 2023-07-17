<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $guests = $_POST['guests'];
    $allergies = $_POST['allergies'];

    // Process the data (e.g., save it to a database)
    // ...
    // Add your processing logic here

    // Redirect to a success page
    header("Location: reservation_success.html");
    exit();
}
