<?php
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $appointmentDate = $_POST['appointment-date'];
    $appointmentTime = $_POST['appointment-time'];
    $doctor = $_POST['doctor'];
    $reason = $_POST['reason'];

    // Connect to the database
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'myDB';
    $conn = mysqli_connect($host, $user, $password, $database);
    // Check the connection
    if (!$conn) {
      die('Connection failed: ' . mysqli_connect_error());
    }

    // Insert the data into the appointments table
    $sql = "INSERT INTO appointments (pname, dob, gender, appointment_date, appointment_time, doctor, reason)
            VALUES ('$name', '$dob', '$gender', '$appointmentDate', '$appointmentTime', '$doctor', '$reason')";

    if (mysqli_query($conn, $sql)) {
      // Display a success message
      echo '<div class="success">Your appointment has been scheduled. We will contact you soon.</div>';
    } else {
      // Display an error message
      echo '<div class="error">Error: ' . mysqli_error($conn) . '</div>';
    }

    // Close the connection
    mysqli_close($conn);
  }
?>
