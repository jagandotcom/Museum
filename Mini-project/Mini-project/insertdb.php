<?php

$name1 = $_GET['visitor_name'];

$email = $_GET['visitor_email'];

$phnumber1 = $_GET["visitor_phone"];

$adult = $_GET["total_adults"];

$child = $_GET["total_children"];
$date1 = $_GET["checkin"];





// Create connection
$total = $adult * 500 + $child *200 ;

$conn = new mysqli("localhost", "root", "", "museum");

$sql = "INSERT INTO visitors (name1,email,phnumber1,adult,child,date1)VALUES
('$name1','$email','$phnumber1','$adult','$child','$date1')";

if ( $conn->query($sql)=== TRUE)

{ echo " 
    <h2> hello ". $name1."your payment amt is " . $total ."New record Inserted successfully</h2>";
   
    header("location:payment1.php?user=$name1&total=$total");
    die();}
else
{ echo "Error: " . $sql . "<br>" . $conn->error;}

$conn->close();

?>