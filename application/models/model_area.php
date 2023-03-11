<?php

class Model_Area extends Model
{
    function get_name_by_id($connect,$id_recipient)
    {
        $sql = "SELECT * FROM users WHERE id = :id_recipient";
        $stmt = $connect->prepare($sql);
        $stmt->bindValue(":id_recipient", $id_recipient);
        $stmt->execute();
        foreach ($stmt as $row) {
        return $row["username"];
        }
    }
	
	public function get_send_messages($id_user)
	{	
        $conn_db=$this->get_connect_db();
        $sql = "SELECT * FROM email_messages WHERE id_sender = :id_user";
        $stmt = $conn_db->prepare($sql);
        $stmt->bindValue(":id_user", $id_user);
        $stmt->execute();
        $titles=[];
        $messages=[];
        $recipients=[];
        foreach ($stmt as $row) {
            //$recipient[] = $this->get_name_by_id($conn_db,$row["id_sender"]);
            array_push($titles,$row["title_message"]);
            array_push($messages,$row["text_message"]);
            array_push($recipients, $this->get_name_by_id($conn_db,$row["id_recipient"]));

        }
        return $res=[$titles,$recipients,$messages];
    
    }
    public function get_recipient_messages($id_user)
	{	
        $conn_db=$this->get_connect_db();
        $sql = "SELECT * FROM email_messages WHERE id_recipient = :id_user";
        $stmt = $conn_db->prepare($sql);
        $stmt->bindValue(":id_user", $id_user);
        $stmt->execute();
        $titles=[];
        $messages=[];
        $senders=[];
        foreach ($stmt as $row) {
            //$recipient[] = $this->get_name_by_id($conn_db,$row["id_sender"]);
            array_push($titles,$row["title_message"]);
            array_push($messages,$row["text_message"]);
            array_push($senders, $this->get_name_by_id($conn_db,$row["id_sender"]));

        }
        return $res=[$titles,$senders,$messages];
    
    }
    function send_message($user_id,$title,$message_text,$recipient){
        $conn_db=$this->get_connect_db();
        $sql = "SELECT * FROM Users WHERE username = :recipient";
        $stmt =  $conn_db->prepare($sql);
        $stmt->bindValue(":recipient",$recipient);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            foreach ($stmt as $row) {
                $recipient_id = $row["id"];
            }
            $sql = "INSERT INTO email_messages (id_sender,id_recipient,text_message,title_message) VALUES ('$user_id', '$recipient_id', '$message_text','$title')";
            $conn_db->exec($sql);
            return true;

        
        }
        else{
            return false;
        }
    }
    

}