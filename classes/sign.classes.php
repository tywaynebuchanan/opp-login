<?php 

class Signup extends DbConnect{
     

    protected function setUser($userid,$password,$email){
        $stmt = $this->connect()->prepare("INSERT into users(firstname,password,email) VALUES(?,?,?)");

        //hash the password before it is entered into the database
        $hashpassword = password_hash($password,PASSWORD_DEFAULT);
        if(!$stmt->execute(array($userid,$hashpassword,$email))){
            $stmt = null;
            header("Location:../index.php?stmtFailed");
            exit();
        }
        $stmt = null;
    }


    protected function checkUser($userid,$email){
        $stmt = $this->connect()
        ->prepare('SELECT firstname FROM users WHERE firstname = ? OR email = ?');

        if(!$stmt->execute(array($userid,$email))){
            //Close off query to database
            $stmt = null;
            header("Location: ../index.php?error=stmtFailed");
            exit();
        }

        //Check to see if there is any result from the database
        $resultCheck ="";
        if($stmt->rowCount()>0){
            $resultCheck = false;

        }else{
            $resultCheck = true;
        }

        return $resultCheck;


    }
}

?>