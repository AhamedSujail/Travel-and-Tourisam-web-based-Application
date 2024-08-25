<?php
$Photographer_id = filter_input(INPUT_POST, "Photographer_id");
$location = filter_input(INPUT_POST, "location");
$photographer = filter_input(INPUT_POST, "photographer");
$date= filter_input(INPUT_POST, "date");
$time = filter_input(INPUT_POST, "time");
$duration= filter_input(INPUT_POST, "duration");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_tourisam";


$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());

 }
 else{
  $sql = "INSERT INTO `photographer_booking`(`Photographer_Id`, `Location`, `Photographer`, `Date`, `Time`, `Duration`) VALUES ('$Photographer_id ','$location','$photographer','$date', '$time', '$duration')";
  if ($conn->query($sql)){
    echo "Photographer booking successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>