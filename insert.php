<?php
    
    include "db-config/";
$email = $_POST['myData'];
//$pass  = $_POST['password'];

$request = json_decode($email);
$email = $request->email;
$mobile = $request->mobile;
$name = $request->name;

echo $email.$mobile ;



$sql = "INSERT INTO `basic`(`name`, `mobile_number`, `email`) VALUES ('$name', '$mobile', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
 $conn->close();

?>
