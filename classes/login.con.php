<?php 

class LoginContr extends Login{

        private $userid;
        private $password;

        public function __construct($userid,$password){

            $this->userid = $userid;
            $this->password = $password;
            
        }

        public function loginUser()
        {
                $result = '';
                if($this->isEmpty() == false){
                    //echo "Empty input";
                    header("location:../index.php?error=emptyinput");
                    exit();
                }
        }

        private function isEmpty(){
            $result = '';
            if(empty($this->userid) || empty($this->password))
            {
                $result = false;
    
            }else{
                $result = true;
            }
            return $result;
        }
        

}