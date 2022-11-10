  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title> PHP Registration Form Example </title>  
  <style>  
.error {   
color: white;  
    font-family: lato;  
    background: yellowgreen;  
    display: inline-block;  
    padding: 2px 10px;  
}  
* {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
body {  
    margin: 50px auto;  
    text-align: center;  
    width: 800px;  
}  

h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: hotpink;  
    text-transform: uppercase;  
}  
label {  
    width: 150px;  
    display: inline-block;  
    text-align: left;  
    font-size: 1.5rem;  
    font-family: 'Lato';  
}  
input {  
    border: 2px solid #ccc;  
    font-size: 1.5rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
}  
form {  
    margin: 25px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    width: 500px;  
    background: #f3e7e9;  
}  
div.form-element {  
    margin: 20px 0;  
}  
input[type=submit]::after {    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;    
  color: ;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=submit]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit]:hover {    
  color: #1A33FF;    
}    
</style>  
</head>  
<body>    
<?php  
$nameErr = "";  
$emailErr = "";  
$genderErr = "";  
$phErr = "";  
$name = "";  
$email = "";  
$gender = "";  
$ph="";  
?>
 
<h1>  Registration Form  </h1>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">    
  <b> Enter Name: </b> <input type="text" name="name" value="<?php echo $name;?>">  
  
  <br> <br>  
 <b> Enter E-mail: </b> <input type="text" name="email" value="<?php echo $email;?>">  
  <span class="error"> * <?php echo $emailErr;?> </span>  
  <br> <br>  
 <b> Enter Number: </b> <input type="text" name="ph" value="<?php echo $ph;?>">  
  <span class="error"> * <?php echo $phErr;?> </span>  
  <br> <br>  
  
 <b> Select Gender: </b>  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other    
  
  <br> <br>  
  <input type="submit" name="submit" value="Register ">    
</form>  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){


 
  if (empty($_POST["name"])) {  
    $nameErr = "Name Field is required";  
  } else {  
    $name = test_input($_POST["name"]);  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {  
      $nameErr = "Only letters and white space allowed";  
    }  
  }  
    if (empty($_POST["email"])) {  
    $emailErr = "Email field is required";  
  } else {  
    $email = test_input($_POST["email"]);  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
      $emailErr = "Invalid email format";  
    }  
  }  
  if (empty($_POST["ph"])) {  
    $ph = "";  
  } else {  
    $ph = test_input($_POST["ph"]);  
    if(preg_match('/^[0-9]{11}+$/', $ph)){  
        $phErr = "Invalid pattern";  
    }  
  }  
  
  if (empty($_POST["gender"])) {  
    $genderErr = "Gender is required";  
  } else {  
    $gender = test_input($_POST["gender"]);  
  }  

  echo "Register Successfully!!"; 
 
} 
function test_input($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  
}  
?> 
</body>  
</html>  