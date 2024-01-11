<?php





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array();
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || !filter_var($_POST['email_r'], FILTER_VALIDATE_EMAIL)) {
        $data['emailError'] = "Please enter email*";
    }

    if (empty($password) || !htmlspecialchars($_POST['first_name'])) {
        $data['passwordError'] = "Please enter password*";
    }
    


    // if () {
    //     $data['passwordError'] = "Password inccorect*";
    // }

    // Send the JSON response
    echo json_encode($data);
    exit();
}


    
//     $OBJECT_CHAT = new CHAT();
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $new_password = $OBJECT_CHAT->hach_password($password);
//     $sql = "SELECT * FROM signup WHERE email='$email'";
//     $user = $OBJECT_CHAT->select($sql,$email,$new_password);

//     $_SESSION['user_id'] = $user['user_id'];
//     $_SESSION['name'] = $user['name'];
//     $_SESSION['email'] = $user['email'];

//     // echo "<pre>";
//     // print_r($user);
//     // echo "<pre>";

//     // echo "<script> alert('le code nadi'); </script>";

//     if ($user) {
//         header("location: index.php?page=home");
//     }
    
//     // echo "jab data";
//     // exit();  
// }


