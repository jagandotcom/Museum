<?php

$name1 = $_GET['n1'];

$mail = $_GET['n2'];



$conn = new mysqli(“localhost”, “root”, “”, “museum”);

$sql = "INSERT INTO user1 (name1,mail)VALUES
('$name','$mail')";

if ( $conn->query($sql)=== TRUE)

{ echo "<h2>New record Inserted successfully</h2>";}

else
{ echo "Error: " . $sql . "<br>" . $conn->error;}

$conn->close();

?>