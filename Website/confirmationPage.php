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
       
        $user;
        $pass;
        $decor;
        $entertainment;
        $invitations;
        $food;
        $CustomerID = $_SESSION["CustomerID"];
        if ($stmt = $mysqli->prepare("select username, password, decor, entertainment, invitations, food from customer where customerID=?")) {
           $stmt->bind_param("i", $CustomerID);
          $stmt->execute();
          $stmt->bind_result($user,$pass, $decor, $entertainment, $invitations, $food);
        
        /* fetch values */
        while ($stmt->fetch()) {
        $user = $user;
        $pass = $pass;
        $decor = $decor;
        $entertainment = $entertainment;
        $invitations = $invitations;
        $food = $food;
        }
        }
        
        $stmt -> close();

         echo'<br><br><br><h5>Thank you '.$user." for your submission!"
                 . " You have chosen: ".$decor." for decor, ".$entertainment ." for entertainment, "
                 .$invitations. " for invitations, and ".$food." for food.</h5>";
        ?>
  <?php
        include'footer.php';
        ?>