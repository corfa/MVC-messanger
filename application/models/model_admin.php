<?php

class Model_Admin extends Model
{
	
    function check_admin($login,$password){
        $conn_db=$this->get_connect_db();
        $sql = "SELECT * FROM admins WHERE login = :login_admin";
        $stmt = $conn_db->prepare($sql);
        $stmt->bindValue(":login_admin", $_POST["login"]);
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
            return -1;                
        }
       
    }
    

}