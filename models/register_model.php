<?php
class REGISTER{
    public $db;

    public function InsertUser($name, $email, $password, $role){
        global $db;

        hach_password($password);

        $sql = "INSERT INTO users (first_name, email, password) VALUE (:name, :email, :password, :role)";

        $stmt = $db->prepar($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role', $role);
        $stmt->execute();

        return true;
    }

    public function hach_password($password){
        $hach = sha1($password);
        return $hach;
    }

    public function CountRow(){
        global $db;

        $sql = "SELECT * FROM users";
        $stmt = $db->prepar($sql);
        $stmt->execute();
        $count_row = $stmt->CountRow();

        return $nember_row;       
    }


}