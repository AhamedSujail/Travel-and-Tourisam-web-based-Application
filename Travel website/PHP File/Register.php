<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "travel_tourisam"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = mysqli_real_escape_string($conn, $_POST["userid"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "INSERT INTO `register` (`Username`, `User_ID`, `Email`, `Phone No`, `Password`) VALUES ('$username','$userid', '$email', '$phone', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!.";
        
        exit();
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
