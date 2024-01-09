<?php
$objet_edit = new EDITE();

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $result = $objet_edit->select($user_id);
    $row = mysqli_fetch_assoc($result);

   
}else {
    echo "empty <br>";

}

if (isset($_POST['send'])) {
     
    $name_update = $_POST['name'];   
    $email_update = $_POST['email'];
    $password_update = $_POST['password'];
    $user_id = $_POST['user_id'];
    print_r($user_id);
    print_r($name_update);
    print_r($email_update);
    print_r($password_update);
    $result1 = $objet_edit->edit($name_update,$email_update,$password_update,$user_id);
}