<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$OBJECT_CHAT = new CHAT();


if (isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['name'] = $name;   
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;   

    $haching_pass = $OBJECT_CHAT->hach_password($password);

    $sql="INSERT INTO signup (name, email, password)
    VALUES ('$name', '$email', '$haching_pass')";
    $OBJECT_CHAT->insert($sql);
    

}




?>