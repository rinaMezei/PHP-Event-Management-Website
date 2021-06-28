  <?php
        include'header.php';
        ?>
    <br>
<br>
<br>
<br>
<br>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="customerFormResults.php" method="POST">
            
            <label for="username">Username:</label>
            <input type="text" name="username" required="required" >
                
           
            <br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" required="required">
            

            
            <br>

            <label for="invitation">Choose a company name for invitations:</label>
            
            <select name="invitation">
                <option name="invitation">Shutterfly</option>
                <option name="invitation">Snapfish</option>
                <option name="invitation">Evite</option>
                <option name="invitation">Canva</option>
            </select>
                
            <br>
            
            <label for="decor">Decor</label>
            <select name="decor">
                <option name="decor">Amazing Savings</option>
                <option name="decor">Party City</option>
                <option name="decor">Dollar Tree</option>
            </select>

            
            <br>
            
            
      
        <?php
        session_start();
        
        $username = "root";
        $password = "";
        $database = "howto";

        $mysqli = new mysqli("localhost", $username, $password, $database);

       $query2 = "SELECT foodDesc FROM foods where foodID = 1";
       if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($foodDesc1);
       $stmt->execute();
       while ($stmt->fetch()) {
       $fDesc1=$foodDesc1;}}
       
       $query2 = "SELECT foodDesc FROM foods where foodID = 2";
       if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($foodDesc2);
       $stmt->execute();
       while ($stmt->fetch()) {
       $fDesc2=$foodDesc2;}}
       
       $query2 = "SELECT foodDesc FROM foods where foodID = 3";
       if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($foodDesc3);
       $stmt->execute();
       while ($stmt->fetch()) {
       $fDesc3=$foodDesc3;}}
       
       
       $query2 = "SELECT foodDesc FROM foods where foodID = 4";
       if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($foodDesc4);
       $stmt->execute();
       while ($stmt->fetch()) {
       $fDesc4=$foodDesc4;}}

        
        echo '<label for="food">Food</label>
            <select name="food">
                <option name="food">'.$fDesc1.'</option>
                <option name="food">'.$fDesc2.'</option>
                <option name="food">'.$fDesc3.'</option>
                <option name="food">'.$fDesc4.'</option>
            </select>';
                
       $query2 = "SELECT entertainmentDesc FROM entertainment where entertainmentID = 1";
       if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($entertainmentDesc1);
       $stmt->execute();
       while ($stmt->fetch()) {
       $eDesc1=$entertainmentDesc1;}} 
       
       $query2 = "SELECT entertainmentDesc FROM entertainment where entertainmentID = 2";
       if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($entertainmentDesc2);
       $stmt->execute();
       while ($stmt->fetch()) {
       $eDesc2=$entertainmentDesc2;}}   
         
       $query2 = "SELECT entertainmentDesc FROM entertainment where entertainmentID = 3";
       if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($entertainmentDesc3);
       $stmt->execute();
       while ($stmt->fetch()) {
       $eDesc3=$entertainmentDesc3;}}   
       
       $query2 = "SELECT entertainmentDesc FROM entertainment where entertainmentID = 4";
       if ($stmt = $mysqli->prepare($query2)); {
       $stmt->bind_result($entertainmentDesc4);
       $stmt->execute();
       while ($stmt->fetch()) {
       $eDesc4=$entertainmentDesc4;}}   
        
       echo '<br><label for="entertainment">Entertainment</label>
            <select name="entertainment">
                <option name="entertainment">'.$eDesc1.'</option>
                <option name="entertainment">'.$eDesc2.'</option>
                <option name="entertainment">'.$eDesc3.'</option>
                <option name="entertainment">'.$eDesc4.'</option>
            </select>';
        ?>
            <br>
        <input type="submit" name="submit" value="Submit">
          </form>
    </body>
  <?php
        include'footer.php';
        ?>
