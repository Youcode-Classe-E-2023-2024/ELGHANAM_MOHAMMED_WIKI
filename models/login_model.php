<?php
class LOGIN{

    public $db;

    public function SelectUser($email, $password){
        global $db;
        
        $sql = "SELECT * FROM users WHERE email = :email ";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
        return $result;
    }

    public function lastInsertId(){
        global $db;
        $last_id = $this->db->lastInsertId();
        
        return $last_id;
    }
}