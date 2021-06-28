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
        //We weren't sure what you meant by 'checks username and password against arrays of valid usernames and passwords', if
        //this is not correct we would be happy to change it
        
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



         $_SESSION["LoggedIn"]=false;
        
        if ($usernameResult > 0) {

        
      $_SESSION["LoggedIn"] = true;      
      setcookie('username',$currUsername);
        }
      

//        $usernameArray = array("Red","Orange","Yellow","Green", "Blue", "Purple");
//        $passwordArray = array("1","2","3","4","5");
//        
//        
//        $user;
//        $pass;
//        $_SESSION["LoggedIn"]=false;
//        
//        
//        foreach ($usernameArray as $user )
//        {
//           
//            if($user == $currUsername)
//            {
//                foreach( $passwordArray as $pass)
//                {
//                   
//                    if($pass == $currPassword)
//                    {
//                        $_SESSION["LoggedIn"] = true;
//                        setcookie('username',$currUsername);
//                        break;
//                        
//                    }
//              
//                }
//                break;
//            }
//        }
       
       echo '<br><br><br><br><div id="buttons"><a href=content.php> Content Page </a></div>';
        ?>
  <?php
        include'footer.php';
        ?>