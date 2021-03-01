<?php
$servername = "localhost";
$username = "alok_dubey";
$password = "SANsan@123";
$dbname = "beatline";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$name = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['text']);
 
$reg_date = date('Y-m-d H:i:s');
// Attempt insert query execution
$sql = "INSERT INTO website (First Name,Last Name, email, text,reg_date) VALUES ('$fame','$lname', '$email', '$text','$reg_date')";
if(mysqli_query($conn, $sql)){
    echo "Thanks for contact us, we will contact you soon.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>