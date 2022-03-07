<?php 


//Check to see if the submit button is clicked

if(isset($_POST['submit']))
{
    //Grabbing data from the form 
    $userid = $_POST['username'];
    $password = $_POST['password'];

    //Instantiate the class
    include('../classes/db.class.php');
    include('../classes/login.classes.php');
    include('../classes/login.con.php');


    $login = new LoginContr($userid,$password);
  
    //Running code to handle errors
    $login->loginUser();
    
    //Going back to front page 
    header('Location:../dashboard.php?error=userSuccess');
}

?>