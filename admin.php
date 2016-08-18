<?php

  define('title','PHP My Admin')


?>
<!DOCTYPE html>
<html>
<head>
  <title>

    <?php

      echo title;

      ?>
  </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    <style>
        html,body{
            background-color:darksalmon;
        }

    </style>
</head>
<body>
 
      
      <?php
      
        
        session_start();
    
        
    
        if($_SESSION['checklogin']) { ?>
           
            
            <?php $_SESSION['checklogin'] = false; ?>
                     
            <h1 class="text-center">Welcome!</h1>
            
            
            <form action="logout.php" method="post">
                <input type="submit" name="logOutButton" class="bg-error pull-right" value="Log Out">
            </form>
            
        <?php } else{
            header ('Location:index.php');
        } ?>
        
        
</body>
</html>