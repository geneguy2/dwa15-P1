<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<?php require 'logic.php'; ?>
    
<!DOCTYPE html>
<html>
<head>
   
    <title>Arrays v1</title>
    
</head> 
<body>
    
    <h1>Arrays v1</h1>
 <div>
 
   <form method="post" action="index.php">
    <label>Enter a number between 2-9</label><br>
    <input type="text" name="length" /><br>
    <label>Select if you want a symbol added to your password</label><br>
    <input type="checkbox" name="symbols" /><br>
    <label>Select if you want a number added to your password</label><br>
    <input type="checkbox" name="numbers" /><br><br>
    <input type="submit" name="Submit" value="Submit" />

</form>

</div>
 
 
   
 
</body>
</html>