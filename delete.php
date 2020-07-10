
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id']; // get id through query string
//echo $id;
//$del = mysqli_query($db,); // delete query
$sql="delete from tube where id ='$id'";
if($conn->query($sql) === TRUE)
{
    mysqli_close($conn); // Close connection
    //header("location:all_records.php"); // redirects to all records page
echo "record deleted successfully";
       header('location:datadeltab.php');
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
