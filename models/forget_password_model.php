<?php
class reset_pass{
    public $db;

    public function select($sql,$email){
        global $db;    
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_assoc($result);
        // echo"<pre>";
        // var_dump($row);
        // echo"<pre>";
        if ($email == $row['email']){
            return $row;
        }else {          
            echo "ERROR : " . mysqli_error($db);
        }
    }


    function update($token,$rows)
    {
        global $db;
        $sql_update = "UPDATE signup SET code = $token WHERE user_id = $rows";
        $result = mysqli_query($db,$sql_update);
        if (!$result) {
            die('error in updating');
        }else {
            return $result;
        }
    }





}





?>