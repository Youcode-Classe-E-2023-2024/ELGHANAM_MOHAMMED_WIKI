<?php

require_once 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    $change_pass = new reset_pass();

    $email = $_POST['email'];
    $error = '';
    $sql = "SELECT user_id, email FROM signup WHERE email = '$email'";
    $result = $change_pass->select($sql,$email);
    
    
    $rows = $result['user_id'];
    $_SESSION['user_id'] = $rows;
    
    // echo"<pre>";
    // var_dump($rows);
    // echo"<pre>";





    if (!$result) {
        $error = 'Email déjà existant.';
        echo $error;
        exit;
    }else {
    //    echo"okey";
         if (empty($error)) {

             $token = rand(1, 1000);
             // echo $token;
             
             $result_update = $change_pass->update($token,$rows);
            // echo"<pre>";
            //  var_dump($result_update);
            // echo"<pre>";


             if (!$result_update) {
                 die('error in query update');
             }
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'mohamvirifyemail@gmail.com';
            $mail->Password = 'jesq xkvw rquq frlx';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('mohamvirifyemail@gmail.com', 'MOHAMMED');
            $mail->addAddress($email, 'Nom de l\'utilisateur');
            $mail->Subject = 'change password';
            $mail->Body = "bonjour monsieur Ceci est le code de réinitialisation du mot de passe $token .";
            header('location: index.php?page=check_code');


            try {
                 $mail->send();
                 echo "
                 <script>
                 alert('Utilisateur ajouté avec succès. E-mail envoyé.');
                 </script>
                 ";
             } catch (Exception $e) {
                 echo 'erreur';
             }
        }
        
    }
}



?>