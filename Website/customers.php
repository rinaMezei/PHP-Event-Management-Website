<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
  <?php
        include'header.php';
        ?><br><br><br><br>
        <?php
        session_start();
        $username = "root";
        $password = "";
        $database = "howto";

        $mysqli = new mysqli("localhost", $username, $password, $database);
        
         $query2 = "SELECT max(customerID) as max FROM customer";
        if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($customerID);
       $stmt->execute();
       while ($stmt->fetch()) {
       $custID=$customerID;}
       
   }
       
        $cID;
        $user;
        $decor;
        $entertainment;
        $invitations;
        $food;
        //$CustomerID = $_SESSION["CustomerID"];
        for($i = 1; $i<$custID+1;$i++)
        {
        if ($stmt = $mysqli->prepare("select customerID, username, decor, entertainment, invitations, food from customer where customerID=?")) {
           $stmt->bind_param("i", $i);
          $stmt->execute();
          $stmt->bind_result($cID,$user, $decor, $entertainment, $invitations, $food);
        
        /* fetch values */
        while ($stmt->fetch()) {
        $cID = $cID;
        $user = $user;
        $decor = $decor;
        $entertainment = $entertainment;
        $invitations = $invitations;
        $food = $food;
        }
        }
        
        $stmt -> close();
        
        echo '<h5>Customer Information: '.
        '<p>Customer ID: '.$cID.'</p>
        <p>Username: '.$user.'</p>
        <p>Decor: '.$decor.'</p>
        <p>Entertainment: '.$entertainment.'</p>
        <p>Invitations: '.$invitations.'</p>
        <p>Food: '.$food.'</p></h5>';
                
                
        }
        ?>
  <?php
        include'footer.php';
        ?>