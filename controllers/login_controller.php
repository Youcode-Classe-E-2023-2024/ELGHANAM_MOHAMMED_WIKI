<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array();
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $data['emailError'] = "Please enter email*";
    }

    if (empty($password) || !htmlspecialchars($_POST['password'])) {
        $data['passwordError'] = "Please enter password*";
    }
    
    

    // Send the JSON response
    
    if (empty($data)) {
        $objet_login = new LOGIN();
        $result = $objet_login->SelectUser($email, $password);
        // :dd($result);
        



        if (!password_verify($password,$result[0]['password']) || $email != $result[0]['email']) {
            echo "<script>alert('les donnee inccorect');</script>";
            exit();
        }elseif ($result[0]['role'] == "admin") {
            // header("location: index.php?page=dashboard");
            $data['true_dashboard'] = "true";
            
        }elseif ($result[0]['role'] == "author") {
            // header("location: index.php?page=home");
            $data['true_home'] = "true";
            
        }
        
        // echo "okeyy";
        // $email = $_POST['email'];
        // $password = $_POST['password'];
    }
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


