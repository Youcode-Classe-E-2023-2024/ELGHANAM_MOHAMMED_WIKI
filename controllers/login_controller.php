<?php

function validateForm($data) {
    $errors = [];

    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Valid email is required";
    }

    if (empty($data['password'])) {
        $errors['password'] = "Password is required";
    }

    return $errors;
}
    

if (isset($_POST['send'])){


    $validationErrors = validateForm($_POST);

    if (empty($validationErrors)) {
        
        echo "success";
    } else {
        // Return validation errors
        echo json_encode($validationErrors);
    }



    
    $OBJECT_CHAT = new CHAT();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $new_password = $OBJECT_CHAT->hach_password($password);
    $sql = "SELECT * FROM signup WHERE email='$email'";
    $user = $OBJECT_CHAT->select($sql,$email,$new_password);
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];

    // echo "<pre>";
    // print_r($user);
    // echo "<pre>";
    // echo "<script> alert('le code nadi'); </script>";
    if ($user) {
        header("location: index.php?page=home");
    }
    
    // echo "jab data";
    // exit();  



}
