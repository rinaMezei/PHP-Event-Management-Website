  <?php
        include'header.php';
        ?>
    <br>
<br>
<br>
<br>
<br>
        <form method="post" action="resultsLogin.php">
            <label for="username">Username:</label>
            <input type="text" name="username" required="required" >
                
            <br>
            <br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" required="required">
            
            <br>
            <br>
            
            <input type="submit" name="submit" value="Submit">
        </form>
  <?php
        include'footer.php';
        ?>
