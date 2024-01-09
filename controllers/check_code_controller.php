<?php

if (isset($_POST['send'])) {
    $virify_code = new code();
    $code = $_POST['code'];
    $newPassword = $_POST['newPassword'];
    $confirmnewPassword = $_POST['confirmnewPassword'];
    $user_id = $_SESSION['user_id'];
    

    $sql = "SELECT code FROM signup WHERE user_id = $user_id";
    $result = $virify_code->select($sql);

    // $result = mysqli_query($conn,$sql);
    // $row = mysqli_fetch_assoc($result);
     $code_ex = $result['code'];

    if ($code != $code_ex) {
        echo "<script> alert('le code inccorect'); </script>";
    }else {
        if ($newPassword == $confirmnewPassword) {
            $hach_newPassword = $virify_code->hach_password($newPassword);
            $result_update_password = $virify_code->update($hach_newPassword,$code);
            
            if ($result_update_password) {
                
                header("location: index.php?page=register");
            }
        }else {
            echo "<script>  alert('confirm password inccorect');  </script>";
        }
    }
}



?>