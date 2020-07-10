<!DOCTYPE html>
<html lang="en">
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
$sql1="select *from tube where id='$id'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { $education=explode(",",$row['education']); ?>



<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  
    

</head>
<body>

<div class="container">
  <h1>Registration Form</h1>
  <form class="form-horizontal" id="myform" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name1" value="<?php echo $row['name'];?>" minlength="5" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age:</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" id="age" placeholder="Enter age" name="age" value="<?php echo $row['age'];?>" min="18" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Email:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="abc@def.com" name="email" value="<?php echo $row['email'];?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="password"  minlength ="5" placeholder="Enter password" name="password" value="<?php echo $row['password'];?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
      <div class="col-sm-5">          
        <input type="Date" class="form-control" id="dob"  name="dob" value="<?php echo $row['dob'];?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="country">Country:</label>
      <div class="col-sm-5">          
       <select name="Country" id="country" class="form-control">
  <option value="<?php echo $row['country'];?>">India</option>
  <option value="USA">USA</option>
</select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="state">State:</label>
      <div class="col-sm-5">          
       <select name="State" id="state" class="form-control">
  <option value="<?php echo $row['state'];?>">Delhi</option>
  <option value="Maharastra">Maharastra</option>
  <option value="Tamil Nadu">Tamil Nadu</option>
  <option value="Telangana">Telangana</option>
  <option value="Florida">Florida</option>
</select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:</label>
      <div class="col-sm-5">          
       <select name="City" id="city" class="form-control">
  <option value="<?php echo $row['city'];?>">New Delhi</option>
  <option value="Mumbai">Mumbai</option>
  <option value="Chennai">Chennai</option>
  <option value="Hyderabad">Hyderabad</option>
  <option value="Miami">Miami</option>
</select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" id="address" for="address">Address:</label>
      <div class="col-sm-5">          
        <textarea name="address" rows="5" cols="55" placeholder="Full Address" minlength="20"  required class="form-control" ><?php echo $row['address'];?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gender" id="gender">Gender:</label>
      <div class="col-sm-5">          
        <input type="radio" name="Gender" id="male" value="male" <?php if($row['gender']=="male"){ echo "checked";}?> class="radio-inline"/> Male
     <input type="radio" name="Gender" id="female" value="female" <?php if($row['gender']=="female"){ echo "checked";}?> class="radio-inline"/> Female
     <input type="radio" name="Gender" id="others" value="others" <?php if($row['gender']=="others"){ echo "checked";}?> class="radio-inline"/> Others
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="education" id="education">Education:</label>
      <div class="col-sm-5">          
        <input type="checkbox" id="martriculation" name="education[]" value="martriculation" <?php if(in_array("martriculation",$education)) echo 'checked="checked"'; ?> class="checkbox-inline"/>
  <label for="martriculation"> Matric </label>
  <input type="checkbox" id="inter" name="education[]" value="inter" <?php if(in_array("inter",$education)) echo 'checked="checked"'; ?> class="checkbox-inline"/>
  <label for="inter"> Inter </label>
  <input type="checkbox" id="graduation" name="education[]" value="graduation" <?php if(in_array("graduation",$education)) echo 'checked="checked"'; ?> class="checkbox-inline"/>
  <label for="graduation"> Graduation</label>
  <input type="checkbox" id="post-graduation" name="education[]" value="post-graduation" <?php if(in_array("post-graduation",$education)) echo 'checked="checked"'; ?> class="checkbox-inline"/>
  <label for="post-graduation"> Post-Graduation</label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-5">          
  
     <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required value="<?php echo $row['phone'];?>" required class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="fileToUpload">Upload File:</label>
      <div class="col-sm-10">          
        <input type="file" id="fileToUpload" name="fileToUpload" required><br>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" id="remember" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="btn" id="btn">Update</button>
       <button type="reset" class="btn btn-default" class="col-sm-offset-4 col-sm-10">Reset</button>
      </div>
    </div>
    <div id="display"></div>
  </form>
</body>
</html>
<?php }}?>
<?php
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
$sql = "UPDATE tube SET name='$name',age='$age',email='$email',password='$password',dob='$dob',country='$country',state='$state',city='$city',address='$address',gender='$gender',education='$edu',phone='$phone',myfile='$fname' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo " record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }

}
$conn->close();
}
?>
