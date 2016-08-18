<?php

  define('title','Login page')


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
            background-color: #EDEFF0
        }
        section{
            box-shadow: 0px 0px 5px black;
            padding:20px;
            background-color:white;
        }
        section div:first-child{
            padding:5px;
            margin:10px auto;
            width:50px;
            height: 50px;
            border:1px solid gray;
            border-radius:50%;
            background-color:darkgreen;
        }

        h1{
            color:red;
        }
        h3,h5{
            text-align: center
        }
        input{
            margin:15px 0;
        }
        input[name="submitAdmin"]{
            display:block;
            margin:0 auto;
        }
    </style>
</head>
<body>
 

      
    <section class="col-md-3 col-md-offset-5">
            <div></div>
              <h3>Admin Login</h3>
              <h5>Sign in to your account</h5>
          <form  action="check.php" class="input-group" method="post">
              <input type="text" name="email" class="form-control" placeholder="Email Address">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <input type="submit" name="submitAdmin" class="btn btn-success" value="Sign In">
          </form>
          
        <?php
        session_start();
        
        
        if(isset($_SESSION['errormsj'])){ ?>
            
            
            <div class="alert alert-danger">
                <p><?= $_SESSION['errormsj'] ?></p>
           </div>
            <?php 
            unset($_SESSION['errormsj']);
            ?>
       <?php } ?>
        
        
        
        
          
    </section>   
       
       
        
      
       
  
    
<script src="jquery-3.1.0.min.js"></script>    
</body>
</html>