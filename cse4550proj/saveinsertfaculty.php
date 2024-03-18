<html>

<body>

 

 

<?php

$servername = "localhost";
$username = "quickme1_4211";
$password = "csci4211";
$dbname = "quickme1_4211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
 
   

 

   

   // get the variables from the URL request string

   $facultyID = $_REQUEST['facultyID'];

   $firstname = $_REQUEST['firstname'];

   $lastname = $_REQUEST['lastname'];

    $email = $_REQUEST['email'];

    $phone = $_REQUEST['phone'];

    $Office_no = $_REQUEST['Office_no'];

    // $specialty = $_REQUEST['specialty'];

    

   $sql = "INSERT INTO faculty (facultyID, firstname, lastname, email, phone, Office_no)
VALUES ('$facultyID', '$firstname', '$lastname','$email', '$phone','$Office_no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


 

</body>

</html>