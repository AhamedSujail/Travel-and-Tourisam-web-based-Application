<?php

$cards_accepted = filter_input(INPUT_POST, "cards_accepted");
$name_on_card = filter_input(INPUT_POST, "name_on_card");
$credit_card_number = filter_input(INPUT_POST, "credit_card_number");
$exp_month = filter_input(INPUT_POST, "exp_month");
$exp_year = filter_input(INPUT_POST, "exp_year");
$cvv = filter_input(INPUT_POST, "cvv");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_tourisam"; 

// Create 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());
}

 else{
  $sql = "INSERT INTO `payment_details`(`Cards_Accepted`, `Name_on_Card`, `Credit_card_Number`, `Exp_Month`, `Exp_Year`, `Cvv`)  VALUES ('$cards_accepted ','$name_on_card','$credit_card_number','$exp_month', '$exp_year', '$cvv')";
  if ($conn->query($sql)){
    echo "Payment successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>