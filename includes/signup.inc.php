<?php 


//Check to see if the submit button is clicked

if(isset($_POST['submit']))
{
    //Grabbing data from the form 
    $userid = $_POST['username'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $email = $_POST['email'];

    //Instantiate the class
    include('../classes/db.class.php');
    include('../classes/sign.classes.php');
    include('../classes/signup.con.php');
    include('../includes/errors.classes.php');

    $signup = new SignupContr($userid,$password,$conpassword,$email);
  
    //Running code to handle errors
    $signup->signupUser();
    
    //Going back to front page 
    header('Location:../index.php?error=Success');
}

?>