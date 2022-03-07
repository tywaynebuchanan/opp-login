<?php 


class DbConnect{

    protected function connect(){
        try{
            $username = "root";
            $password = "";
            $db = "testdb";
            $host = "localhost";

            $conn = new PDO("mysql:host=$host;dbname=testdb",$username,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Connect Succesful";
            return $conn;
            
        }catch(PDOException $e){
            echo "Connection Failed: ".$e->getMessage();
            exit();
        }
    }

}

?>