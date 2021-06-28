  <?php
        include'header.php';
        ?>
    <br>
<br>
<br>
<br>
<br>
       <form action="contactUsResults.php" method="post">
            <label for="comments">Please enter any feedback:</label>
            <br>
            <input type="text" name="comments" placeholder="Comments">
            
            <br>
            <br>
            <label for="questions">Please enter any questions:</label>
            <br>
            <input type="text" name="questions" placeholder="Questions">
            <br>
            <br>
            <input type="submit" name="submit" value="Submit">
            
        </form>
        <?php
        // put your code here
        ?>
  <?php
        include'footer.php';
        ?>

