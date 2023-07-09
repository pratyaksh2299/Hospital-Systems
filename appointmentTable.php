<?php
// Step 1: Establish a connection to the database


// Create connection
$link = mysqli_connect("localhost", "root", '', "myDB");

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Create the appointments table
$sql = "CREATE TABLE appointments (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(50) NOT NULL,
    dob DATE NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    doctor VARCHAR(50) NOT NULL,
    reason TEXT
)";

if (mysqli_query($link, $sql)) {
    echo "Table appointments created successfully";
} else {
    echo "Error creating table: " . mysqli_error($link);
}

// Step 3: Close the connection
mysqli_close($link);
?>
