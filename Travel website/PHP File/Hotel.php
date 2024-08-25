<?php
$hotel_id = filter_input(INPUT_POST, "hotel_id");
$hotel= filter_input(INPUT_POST, "hotel");
$room_type = filter_input(INPUT_POST, "room_type");
$Check_in_date = filter_input(INPUT_POST, "Check_in_date");
$Check_out_date= filter_input(INPUT_POST, "Check_out_date");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_tourisam";


$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());

 }

 else{
  $sql = "INSERT INTO `hotel`(`hotel_id`, `hotel`, `room_type_id`, `check_in_date`, `check_out_date`) VALUES ('$hotel_id','$hotel','$room_type','$Check_in_date','$Check_out_date')";
  if ($conn->query($sql)){
    echo "Hotel booking successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>