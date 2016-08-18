<!DOCTYPE html>
<html>
   <head>
       <title></title>
   </head>   
    <body>
        <?php
        
        
            session_start();
        
            if($_SESSION['checklogout']){
                header ('Location:index.php');
            }else{
                header ('Location:index.php');
            }

        
        ?>
    </body>
</html>