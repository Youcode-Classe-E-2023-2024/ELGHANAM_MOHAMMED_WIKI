<?php

$objet_home = new HOME();
$result = $objet_home->select();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();
    
    if (empty($_POST['title']) || !htmlspecialchars($_POST['first_name'])) {
        $response['title_error'] = "Please enter title*";
    }

    if (empty($_POST['description']) || !htmlspecialchars($_POST['password_r'])) {
        $response['description_error'] = "Please enter description*";
    }

    // Send the JSON response
    echo json_encode($response);
    exit();
}





?>





?>

