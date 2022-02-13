<?php
$con = mysqli_connect("localhost","root","","tables");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label , button{
            display: block;
            padding: 10px 0px;
        }
        button{
            margin-top: 10px;
            padding: 10px;
        }
        label{
            font-weight: 700;
        }
     
        form{
            border: 5px solid blueviolet;
            border-radius: 10px;
            width: fit-content;
            margin: 0 auto; 
            padding: 10px;
        }
        h1{
            text-align: center;
        }
        
        
    </style>
</head>
<body>
    <h1>HTML Form</h1>
   <form action="#" method="post" >
       
      <label for="name">Name</label>
       <input type="text" name="name" placeholder="enter name">
       <label for="phno">Phone Number</label>
       <input type="text" name="phno" placeholder="enter phone number">
       <label for="email">Email</label>
       <input type="text" name="email" placeholder="enter email">
       <label for="pass">PASSWORD</label>
       <input type="password" name='pass' placeholder='enter pass'><br>Gender:</br>
       <input type="radio" name='gender' value='Male'>Male
       <input type="radio" name='gender' value='Female'>Female
       <input type="radio" name='gender' value='Other'>Other
       <label for="country">Select Country</label>
       <Select>
           <option value="India">India</option>
           <option value="Australia">Australia</option>
           <option value="America">America</option>
       </Select>
       <label>Picture</label>
       <input type="file" name='Picture'>
       <label>Age</label>
       <input type="range" min="18" max="25">
       <label for="">Color</label>
       <input type="color">
       <label for="">Date of Birth</label>
       <input type="Date">
       <label for="">Time</label>
       <input type="time">
       <label for="">Select your interest</label>
       <input type="checkbox">Sex
       <input type="checkbox">Masturbation
       <input type="checkbox">Blow Job
       <input type="checkbox">Ass lick
       <input type="checkbox">Anal
       <input type="month">
    

       <button type="submit">Submit</button>
   </form>
   <?php if (isset($gender) && $gender=="female") echo "checked";?>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">

  

   <?php
   $name = null;
   $phno = null;
   $email = null;
   $Pass = null;
   $gender = null;
   $name =  $_REQUEST['name'];
   
   $phno = $_REQUEST['phno'];
   $email = $_REQUEST['email'];
   $Pass = md5($_REQUEST['pass']);
   $genders = $_REQUEST['gender'];
   


   $sql = "INSERT INTO `form` (`Name`, `Phone Number`, `Email`,`Password`,`gender`) VALUES 
    ('$name', '$phno','$email','$Pass','$gender')";
 
 if(mysqli_query($con, $sql)){
    echo "<h3 style='text-align:center;'>Data stored in a database successfully." 
        . "<br> Please browse your localhost php my admin" 
        . " to view the updated data</h3>"; 

    
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($con);
}

   
   
   ?>
</body>
</html>