<html>
  <head>
  <h1> Login page  </h1>  
    <style>
      h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: red;  
    text-transform: uppercase;  
}  
      body{
background-color: whitesmoke;
      }
      #f1
      {
        left:300px;
      }
      #c1{
        vertical-align: middle;
        font-family: 'Times New Roman', Times, serif;
        font-size: larger;
        font-style: italic;
      color: royalblue;
      }
      </style>
      </head>
  <body><form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div id="f1">
   Userame: <input type="email" name="fname"><br><br><br>
   Password:<input type="password" id="pass" name="pass"><br><br><br>
  <input type="submit" name="login" >
</form>
    </div>
<div id="c1">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    
    $name = $_POST['fname'];
    $p = $_POST['pass'];
    if (empty($name) )
    {

    }  if (empty($p)) {
        echo "Field is empty";
    } else {
        echo "Welcome  back!!";
    }
}
?>
</div>
</body>
</html>