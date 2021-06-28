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
        if($_SESSION['LoggedIn']==true)
        {
            echo'<br><br><br><br><h2>Hello '.$_COOKIE["username"]. '. Thank you for logging into our website.</h2>';
        }
        else
        {
            echo'<br><br><br><h5>ERROR: You have entered incorrect login information</h5>';
            echo'<div id="buttons"><a href=login.php> Login again </a></div>';
        }
        ?>
  <?php
        include'footer.php';
        ?>
