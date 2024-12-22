<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
    
    // You can insert this data into a database or send an email as needed.
    // For now, let's just display the data.
    echo "<h2>Form Submission Successful</h2>";
    echo "<strong>Full Name:</strong> $name <br>";
    echo "<strong>Email:</strong> $email <br>";
    echo "<strong>Phone Number:</strong> $phone <br>";
    echo "<strong>Gender:</strong> $gender <br>";
    echo "<strong>Address:</strong> $address <br>";
}
?>
