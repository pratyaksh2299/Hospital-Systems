<?php
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

// Retrieve the data from the appointments table
$sql = "SELECT * FROM appointments";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Display the data in an HTML table
  echo '<table>';
  echo '<tr><th>Name</th><th>Date of Birth</th><th>Gender</th><th>Appointment Date</th><th>Appointment Time</th><th>Doctor</th><th>Reason</th></tr>';
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['pname'] . '</td>';
    echo '<td>' . $row['dob'] . '</td>';
    echo '<td>' . $row['gender'] . '</td>';
    echo '<td>' . $row['appointment_date'] . '</td>';
    echo '<td>' . $row['appointment_time'] . '</td>';
    echo '<td>' . $row['doctor'] . '</td>';
    echo '<td>' . $row['reason'] . '</td>';
    echo '</tr>';
  }
  echo '</table>';
} else {
  // Display a message if no data is found
  echo 'No appointments found.';
}

// Close the connection
mysqli_close($conn);
?>
