<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
        include'header.php';
        ?>
        <?php
        
        session_start();
        
        $username = "root";
        $password = "";
        $database = "howto";
        
       $mysqli = new mysqli("localhost", $username, $password, $database);

        
        $currUsername = $_POST["username"];
        $currPassword = $_POST["password"];

        $result = "SELECT username FROM login where username = ? and password = ?";
        if ($stmt = $mysqli->prepare("select username from login where username =? and password = ?")) {
           $stmt->bind_param("ss", $currUsername, $currPassword);
          $stmt->execute();
          $stmt->bind_result($usernameResult);
          while ($stmt->fetch()) {
              $usernameResult = $usernameResult;
          }
}

       if ($usernameResult > 0) {

        $user;
        $pass;
        $decor;
        $entertainment;
        $invitations;
        $food;
        $mysqli = new mysqli("localhost", $username, $password, $database);
        if ($stmt = $mysqli->prepare("insert into customer (username,password,decor,entertainment,invitations,food) VALUES(?,?,?,?,?,?)")) {
   
         $stmt->bind_param("ssssss",$user,$pass,$decor,$entertainment,$invitations, $food);
         
    $user = $_POST['username'];
    $pass=$_POST['password'];
    $decor=$_POST['decor'];
    $entertainment =$_POST['entertainment'];
    $invitations = $_POST['invitation'];
    $food = $_POST['food'];
    
        /* execute query */
    $stmt->execute();
    
    
    /* close statement */
    $stmt->close();

    $query2 = "SELECT max(customerID) as max FROM customer";
   if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($customerID);
       $stmt->execute();
       while ($stmt->fetch()) {
       $custID=$customerID;}
       
   }
   
   $_SESSION['CustomerID'] = $custID;
   
   echo '<script> window.location.assign("confirmationPage.php"); </script>';
        }
       }
        else{
            echo"<br><br><br><br><h2>Invalid username or password <br><div id='buttons'><a href='customerForm.php'> Try Again</a></div></h2>";
        }

        ?>
 <?php
        include'footer.php';
        ?>