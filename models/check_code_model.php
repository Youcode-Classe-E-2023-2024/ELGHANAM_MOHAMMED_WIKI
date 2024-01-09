<?php
class code{

    public function hach_password($newPassword){
        $hach = sha1($newPassword);
        return $hach;
    }


    public function select($sql){
        global $db;    
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_assoc($result);
        // echo"<pre>";
        // var_dump($row);
        // echo"<pre>";
        if (!$result){
            echo "ERROR : " . mysqli_error($db);  
        }
        return $row;
    }


    function update($newPassword,$code){
        global $db;
        $sql_update_pass = "UPDATE signup SET password = '$newPassword' WHERE code = $code";
        $result_update_pass = mysqli_query($db, $sql_update_pass);
        if (!$result_update_pass) {
            die('error in updating');
        }else {
            return $result_update_pass;
        }
    }


}



?>