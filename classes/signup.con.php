<?php 

class SignupContr extends Signup{

    private $userid;
    private $password;
    private $conpassword;
    private $email;

    public function __construct($userid,$password,$conpassword,$email)
    {
        $this->userid = $userid;
        $this->password = $password;
        $this->conpassword = $conpassword;
        $this->email = $email;
    }

    //Method to sign up user if all conditions are met
    public function signupUser(){
        if($this->isEmpty() == false){
            header("Location:../index.php?error=emptyinput");
            exit();
        }
        if($this->validateUsername() == false){
            header("Location:../index.php?error=invalidusername");
            exit();
        }

        if($this->validateEmail() == false){
            header("Location:../index.php?error=invalidemail");
            exit();
        }

        if($this->validatePassword() == false){
            
            header("Location:../index.php?error=invalidpassword");
            
            exit();
        }

        if($this->userExist() == false){
            header("Location:../index.php?error=useralreadyindb");
            exit();
        }

        //Sign up the user if everything else is true;
        $this->setUser($this->userid,$this->password,$this->email);
    }

    //Check to see if the input field was empty 
    private function isEmpty(){
        $result = '';
        if(empty($this->userid) || empty($this->password) 
        || empty($this->conpassword) || empty($this->email)){
            $result = false;

        }else{
            $result = true;
        }
        return $result;
    }

    //Function to validate username
    private function validateUsername(){
        $result = '';
        if(!preg_match("/^[a-zA-Z]+$/",$this->userid)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function validateEmail(){
        $result = '';
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function validatePassword(){
        $result = '';
        if($this->password !== $this->conpassword)
        {   
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    //Method to check if user exist in the database
    private function userExist(){
        $result = '';
        if(!$this->checkUser($this->userid,$this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    

}

?>