<?php

class CHAT {
    public $db;
    
// gaching password
public function hach_password($password)
    {
        $hach = sha1($password);
        return $hach;
    }


// insert in data base
public function insert($sql)
    {   
        global $db;
        //echo"<br> hello ";
        $result = mysqli_query($db,$sql);
        // echo"<br> hello ";
        if (!$result) {
            echo mysqli_error($this->db);
        }else { 
            echo"NADIIII";        
            header("Location:index.php?page=register");
        }
    }

public function select($sql,$email,$new_password){
    global $db;    
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_assoc($result);
    if ($email === $row['email'] && $new_password === $row['password'] ){
        return $row;
    }else {          
        echo "ERROR : " . mysqli_error($db);
    }
}



}







?>