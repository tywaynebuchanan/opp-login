<?php 

class Login extends DbConnect{


    protected function getUser($userid,$password){
            $stmt = $this->connect()->prepare("SELECT password FROM users WHERE firstname = ?  OR email = ?");
    
            //hash the password before it is entered into the database
            $hashpassword = password_hash($password,PASSWORD_DEFAULT);
            if(!$stmt->execute(array($userid,$hashpassword  ))){
                $stmt = null;
                header("Location:../index.php?stmtFailed");
                exit();
            }

            //Checking to see if we get any results from the database
            if($stmt->rowCount()==0){
                $stmt = null;
                header("Location: ../index.php?error=usernotfound");
                exit(); 
            }
            
            //Checking the password against what is in the database
            $passwordHash = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkpassword = password_verify($password,$passwordHash[0]["password"]);

            //Check to see if the password matches in the database
            if($checkpassword == false){
                $stmt = null;
                header("Location: ../index.php?error=wrongpassword");
                exit(); 
            }elseif ($checkpassword == true)
            {
                //Do a new prepared statement to login in the user
                $stmt = $this->connect()->prepare("SELECT password FROM users WHERE firstname = ? AND password = ?");
                if(!$stmt->execute(array($userid,$password))){
                    $stmt = null;
                    header("Location: ../index.php?error=stmtFailed");
                    exit();
                }

                //Checking to see if we get any results from the database
            if($stmt->rowCount()==0){
                $stmt = null;
                header("Location: ../index.php?error=usernotfound");
                exit(); 
            }

            //Statement if the user exists in the database

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //Start a session 
            session_start();

            $_SESSION['username'] = $user[0]["firstname"];
            
            $stmt = null;
            }

            $stmt = null;
        }
    
}