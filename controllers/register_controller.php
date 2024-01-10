<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['first_name'])) {
        $first_name = $_POST['first_name']; 
    }

    if (isset($_POST['email_r'])) {
        $email = $_POST['email_r']; 
    }

    if (isset($_POST['password_r'])) {
        $password = $_POST['password_r'];
    }
    
    if (empty($first_name)) {
        return "enter name";
    }

    if (empty($email)) {
        return "enter email";
    }elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "email incorecct";
    }
    
    if (empty($password)) {
        return "enter password";
    }
    exit();

}



?>