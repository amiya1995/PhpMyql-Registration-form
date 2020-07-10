<?php
extract($_POST);
if(isset($_POST['btn']))
{
$name = $_POST['name1'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$result=explode('-',$dob);
$date=$result[2];
$month=$result[1];
$year=$result[0];
$new=$date.'-'.$month.'-'.$year;
echo $new;
$country = $_POST['Country'];
$state = $_POST['State'];
$city = $_POST['City'];
$address = $_POST['address'];
$gender = $_POST['Gender'];
//foreach( $_POST['education'] as $key=>$value ){echo $value." ";}
$education = $_POST['education'];
$edu="";  
foreach($education as $edu1)  
   {  
      $edu .= $edu1.",";  
   }   

//$education = (isset($_POST['education'])) ? array_sum($_POST['education']) : 0;
$phone = $_POST['phone'];
#$myfile = $_POST['fileToUpload'];

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

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    /*if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }*/
//}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" &&
 $imageFileType != "gif"
&& $imageFileType != "jpeg"&& $imageFileType != "pdf" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
$fname= $_FILES["fileToUpload"]["name"];

//mysqli_query($con,"insert into photo values(191,'$name')");
$sql = "INSERT INTO tube(name,age,email,password,dob,country,state,city,address,gender,education,phone,myfile) VALUES ('$name','$age', '$email','$password','$dob','$country','$state','$city','$address','$gender','$edu','$phone','$fname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
   header('location:newform.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 // header('location:newform.php');
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }

}
$conn->close();
}







?>
