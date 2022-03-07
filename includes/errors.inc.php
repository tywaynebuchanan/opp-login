<?php 

        if(isset($_GET['error'])){
            if($_GET['error'] == "emptyinput"){
              echo '<div><div class = "error"><p>Please fill in the input</p></div></div>';
            }
        }
    
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "invalidusername"){
                echo '<div><div class = "error"><p>The username is taken. </p></div></div>';
            }
        }
    
    
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "invalidemail"){
                echo '<div><div class = "error"><p>The email does not match the format </p></div></div>';
            }
        }

        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "Success"){
                echo '<div><div class = "success"><p>Thank you for signing up. Please check your email</p></div></div>';
            }
        }

        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "userSuccess"){
                echo '<div><div class = "success"><p>You are currently logged in</p></div></div>';
            }
        }
    
    
    
    


    
   



?>