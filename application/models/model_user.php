<?php

class Model_User extends Model
{
	
	function create_user($login,$password){
        $conn_db=$this->get_connect_db();
        $password_hash=password_hash($password, PASSWORD_BCRYPT);
        
        $sql = "INSERT INTO Users (username, password) VALUES ('$login', '$password_hash')";
        $res=$conn_db->exec($sql);
        if ($res==1){
            return true;
        }
        else{
            return false;
        }
    }
    function check_user($login,$password){
        $conn_db=$this->get_connect_db();
        $sql = "SELECT * FROM users WHERE username = :login";
        $stmt = $conn_db->prepare($sql);
        $stmt->bindValue(":login", $_POST["login"]);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            foreach ($stmt as $row) {
                if (password_verify($_POST["password"], $row["password"])){
                    return $row["id"];
    
                }
                else{
                    return -1;                
                }
            }
        
        }
        else{
            return -1;                
        }
       
    }

    
    

}