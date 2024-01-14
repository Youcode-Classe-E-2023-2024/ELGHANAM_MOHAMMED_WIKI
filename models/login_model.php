<?php
class LOGIN{

    public $db;

    public function SelectUser($email, $password){
        global $db;
        
        $sql = "SELECT * FROM users WHERE email = :email ";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
  
        return $result;
    }

    
}