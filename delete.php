<?php
$conn=mysqli_connect('localhost','root','','StudentData');


if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id']; 



mysqli_query($conn,"DELETE FROM StudentDataApp WHERE id='".$id."'");
mysqli_close($conn);
header("Location: index.php");
?> 