<?php
class REGISTER{
    public $db;

    public function InsertUser($name, $email, $password, $role){
        global $db;

        $hach_password = $this->hash_password($password);

        $sql = "INSERT INTO users (first_name, email, password, role) VALUE (:name, :email, :password, :role)";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hach_password);
        $stmt->bindParam(':role', $role);
        $stmt->execute();

        return true;
    }

    public function hash_password($password){
        $hach = password_hash($password, PASSWORD_BCRYPT);
        return $hach;
    }

    public function rowCount(){
        global $db;

        $sql = "SELECT * FROM users";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $nember_row = $stmt->rowCount();

        return $nember_row;       
    }


}