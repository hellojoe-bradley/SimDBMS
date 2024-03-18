<p>Update Section Number</p>

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
 
    
$course_no = $_REQUEST['course_no'];

   $section_no = $_REQUEST['section_no'];


$sql = "UPDATE course SET section_no='$section_no' WHERE course_no='$course_no'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

   

?>