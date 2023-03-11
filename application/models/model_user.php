<?php

class Model_User extends Model
{
	
	function create_user($login,$password){
        $conn_db=$this->get_connect_db();
        $sql = "INSERT INTO Users (username, password) VALUES ('$login', $password)";
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
                if ($row["password"]==$_POST["password"]){
                    return $row["id"];
    
                }
                else{
                    return -1;                
                }
            }
        
        }
        else{
            return false;                
        }
       
    }
    

}