<?php
    session_start(); 
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<form action ="index.php" method="POST">

<?php

 if (isset($_SESSION['nbvisites'])) 
 {
     $_SESSION['nbvisites']++;
 } 
 else
  {
     $_SESSION['nbvisites'] = 0;
 }
 
 echo 'Il y a eu avant reset : ' . $_SESSION['nbvisites'] . ' visites';
 
 if (isset($_POST['reset'])) 
 
 {
     unset($_SESSION['nbvisites']);
 }

 ?>

 <input type= submit  name="reset" value = "Reset">

</form>
</body>
</html>    



