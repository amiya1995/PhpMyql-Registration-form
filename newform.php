<!DOCTYPE html>
<html lang="en">
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
  <form class="form-horizontal" id="myform" action="tech.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name1" minlength="5" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age:</label>
      <div class="col-sm-5">
        <input type="number" class="form-control" id="age" placeholder="Enter age" name="age" min="18" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Email:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="abc@def.com" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="password"  minlength ="5" placeholder="Enter password" name="password" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
      <div class="col-sm-5">          
        <input type="Date" class="form-control" id="dob"  name="dob">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="country">Country:</label>
      <div class="col-sm-5">          
       <select name="Country" id="country" class="form-control">
  <option value="India">India</option>
  <option value="USA">USA</option>
</select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="state">State:</label>
      <div class="col-sm-5">          
       <select name="State" id="state" class="form-control">
  <option value="Delhi">Delhi</option>
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
  <option value="New Delhi">New Delhi</option>
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
        <textarea name="address" rows="5" cols="55" placeholder="Full Address" minlength="20" required class="form-control"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="gender" id="gender">Gender:</label>
      <div class="col-sm-5">          
        <input type="radio" name="Gender" id="male" value="male" class="radio-inline"> Male
     <input type="radio" name="Gender" id="female" value="female" class="radio-inline"> Female
     <input type="radio" name="Gender" id="others" value="others" class="radio-inline"> Others
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="education" id="education">Education:</label>
      <div class="col-sm-5">          
        <input type="checkbox" id="martriculation" name="education[]" value="martriculation" class="checkbox-inline">
  <label for="martriculation"> Matric </label>
  <input type="checkbox" id="inter" name="education[]" value="inter" class="checkbox-inline">
  <label for="inter"> Inter </label>
  <input type="checkbox" id="graduation" name="education[]" value="graduation" class="checkbox-inline">
  <label for="graduation"> Graduation</label>
  <input type="checkbox" id="post-graduation" name="education[]" value="post-graduation" class="checkbox-inline">
  <label for="post-graduation"> Post-Graduation</label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-5">          
  
     <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required required class="form-control">
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
        <button type="submit" class="btn btn-default" name="btn" id="btn">Submit</button>
       <button type="reset" class="btn btn-default" class="col-sm-offset-4 col-sm-10">Reset</button>
      </div>
    </div>
    <div id="display"></div>
  </form>
</div>
<script type="text/javascript">
 // $("#myform").submit(function(event){
    
    //var textInput = $("#myform").val();
    //alert("hello world");
  //alert(myform.name1.value+"\n"+myform.age.value+"\n"+myform.email.value+"\n"+myform.password.value+"\n"+myform.dob.value+"\n"+myform.Country.value+"\n"+myform.State.value+"\n"+myform.City.value+"\n"+myform.address.value+"\n"+myform.Gender.value+"\n"+myform.education[0].value+"\n"+myform.phone.value+"\n"+myform.myfile.value);
  //alert(textInput);
 // });

/*$(document).ready(function(){
$("#btn").click(function(){
var name = $("#name").val();
var age = $("#age").val();
var password = $("#password").val();
var dob = $("#dob").val();
var country = $("#country").val();
var state = $("#state").val();
var city = $("#city").val();
var address = $("#address").val();
var gender = $("#gender").val();
var education = $("#education").val();
var phone = $("#phone").val();
var myfile = $("#fileToUpload").val();

$.ajax({
type: "POST",
url: "tech.php",
data:{name:name,age:age,password:password,dob:dob,country:country,state:state,city:city,address:address,gender:gender,education:education,phone:phone,myfile:fileToUpload},
cache: false,
success: function(result){

if (value=1){
   alert("Insert Success");
}
else{
   alert("Insert Error !!");
}
}
});

});
});
*/

$(function(){


var form = $("#myform");
form.submit(function(e){

$(this).attr("disabled","disabled")
e.preventDefault();

$.ajax({

type: form.attr("method"),
url: form.attr("action"),
data: form.serialize(),
//dataType:"json",
success: function(data){
$(".response").text(data.content);
if(data.respone=="success"){
  $(".respone").css("color","green");
    
}
else{
  $(".respone").css("color","red");
   
}
}
$("input:submit").removeAttr("disabled");
},

error: function(data){

$(".response").text("An error occured");
$(".respone").css("color","red");
 $("input:submit").removeAttr("disabled");
}

});

});

});

</script>

</body>
</html>
