<html>
<head>

<style type=text/css>
#city
{
  position:relative;

  bottom:60px;
  left:1045px;
}

#p2
{
top:1px;
left:10px;


}

#sname

{
  background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw9y6btpX1OSVkEHoEHH1Hu4JxwLs4WWrgVGC_UucEn3kXw-zEyLqhNjcN3oxz_d_wjv4&usqp=CAU");
  background-repeat: no-repeat;
  background-size: 20px;
  background-position: left;
  padding:20px;
 position:relative;
 bottom: 70px;
  left:200;


  
  height: 30px;
  width: 10%;
}
#s1
{
color: white;
height: 100px;
  width: 250%;
background-color:rgb(51, 53, 69);
margin: auto;

}
.dropbtn {
  position: relative;
  right:1300px;
  
 
}

.dropdown {
    position: relative;
    display: inline-block;
    bottom: 64px;
    left: 38%;
    z-index: 1000;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

</head>

<body>
  <div id="s1">
  <p id="p2">𝐁𝐨𝐨𝐤𝐦𝐲𝐬𝐡𝐨𝐰</p>
  <img id="filmImage" height="50px" width="70px"src="https://media1.giphy.com/media/dxYLswAT6kMtUdv71h/giphy.gif?cid=6c09b9527b4699d99a4562a64495d6a4a6d92ad005ff9145&rid=giphy.gif&ct=s">
<form name="myForm" action="/m2.php"  method="post">
<div class="dropdown">

  <img id="dropbtn" height="50px" width="70px"src="http://www.saigangroup.com/admin/img/user.png">
  <div class="dropdown-content">
    <a href="#">SIGN IN</a>
    <a href="#">SIGN UP</a>
    
  </div>
</div>
<select name="city" id="city">
    <option value="" selected="selected">Please select city first</option>
    <option value="" >MUMBAI</option>
    <option value="" >DELHI</option>
    <option value="" >PUNE</option>
    <option value="" >BANGLORE</option>
    <option value="" >HYDRABAD</option>
  </select>

<input type="text" id="sname" name="fname" placeholder="Search movie here!!">




    </div>
   
</form>
</body>
</html>
