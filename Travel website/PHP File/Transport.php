<?php
$Transportation_Id = filter_input(INPUT_POST, "transportation-id");
$Transportation_Type = filter_input(INPUT_POST, "transportation-type");
//$Destination = filter_input(INPUT_POST, "destination");
$Departure_Date = filter_input(INPUT_POST, "departure-date");
$Return_Date= filter_input(INPUT_POST, "return-date");
$Number_of_Passengers = filter_input(INPUT_POST, "passenger-count");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_tourisam";


$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());

 }
 else{
  $sql = "INSERT INTO `transport`(`Transportation_Id`, `Transportation_Type`, `Departure_Date`, `Return_Date`, `Number_Of_Passengers`) VALUES ('$Transportation_Id','$Transportation_Type','$Departure_Date','$Return_Date','$Number_of_Passengers')";
  if ($conn->query($sql)){
    echo "Transport booking successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>