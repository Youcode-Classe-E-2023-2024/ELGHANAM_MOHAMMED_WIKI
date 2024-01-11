<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();
    
    if (empty($_POST['first_name']) || !htmlspecialchars($_POST['first_name'])) {
        $response['error_name'] = "Please enter name*";
    }

    if (empty($_POST['email_r']) || !filter_var($_POST['email_r'], FILTER_VALIDATE_EMAIL)) {
        $response['error_email'] = "Please enter email*";
    }

    if (empty($_POST['password_r']) || !htmlspecialchars($_POST['password_r'])) {
        $response['error_password'] = "Please enter password*";
    }

    // Send the JSON response
    echo json_encode($response);
    

    if (empty($response)) {
        $objet_register = new REGISTER();

        $nember_row = $objet_register->rowCount();

        if ($nember_row <= 0) {
            $role = "admin";
        }else {
            $role = "author";
        }

        $name = $_POST['first_name'];
        $email = $_POST['email_r'];
        $password = $_POST['password_r'];

        $_SESSION['name'] = $name;   
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['role'] = $role; 
        
        $result = $objet_register->InsertUser($name, $email, $password, $role);
        if ($result) {
            echo"dakhlat";
        }
       
 
    }
    exit();
}




// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }


// // $OBJECT_CHAT = new CHAT();


// if (isset($_POST['send'])){

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $_SESSION['name'] = $name;   
//     $_SESSION['email'] = $email;
//     $_SESSION['password'] = $password;   

//     $haching_pass = $OBJECT_CHAT->hach_password($password);

//     $sql="INSERT INTO signup (name, email, password)
//     VALUES ('$name', '$email', '$haching_pass')";
//     $OBJECT_CHAT->insert($sql);
    

// }


?>



