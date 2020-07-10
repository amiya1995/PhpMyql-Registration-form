<html>
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="POST">
<input type="submit" name="btn" value="select">
</form>

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
if(isset($_POST['btn']))
{



$sql="SELECT * FROM tube";

$result = $conn->query($sql);
echo '<table border="3" class="table table-bordered">';
echo '<tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th><th>Date of Birth</th><th>Country</th><th>State</th><th>City</th><th>Address</th><th>Gender</th><th>Education</th><th>Phone</th><th>Upload File</th><th>Delete</th><th>Edit</th></tr>';
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["age"]. "<br>";
echo '<tr><td>'.$row["id"].'</td><td>'.$row["name"].'</td><td>'.$row["age"].'</td><td>'.$row["email"].'</td><td>'.$row["dob"].'</td><td>'.$row["country"].'</td><td>'.$row["state"].'</td><td>'.$row["city"].'</td><td>'.$row["address"].'</td><td>'.$row["gender"].'</td><td>'.$row["education"].'</td><td>'.$row["phone"].'</td><td><img height="50" width="50" src="uploads/'.$row["myfile"].'"/><br/>'.$row["myfile"].'</td><td><a href="delete.php?id='.$row["id"].'">Delete</a></td>
<?php</td><td><a href="edit.php?id='.$row["id"].'">Edit</a></td><?php</td></tr>';
  }
} else {
  echo "0 results";
}
echo '</table>';
if(isset($_POST['$row["id"]']))
{
$x=$_POST['$row["id"]'];
$sql1= "DELETE FROM tube WHERE id=".$x;
$conn->query($sql1);

}

$conn->close();
}



echo '</body>';
echo '</html>';

?>



