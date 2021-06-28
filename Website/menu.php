<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
<script src="jquery-3.6.0.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div id="navbar">
   <img src="logo.png">
  <div id="navbar-right">
   
    <a href="index.php">Home</a>
    <a href="invitations.php">Invitations</a>
    <a href="decor.php">Decor</a>
    <a href="entertainment.php">Entertainment</a>
    <a href="food.php">Food</a>
    <a href="contactUs.php">Contact Us</a>
    <a href="customerForm.php">Customer Information</a>
    <a href="login.php">Login</a>
    <a href='customers.php'>Customers</a>
<!--    <a href="logo.jpg" id="logo"></a>-->

  </div>
             
</div>

<script>
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "50px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>
    </body>
</html>
