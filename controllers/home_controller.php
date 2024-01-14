<?php
$objet_home = new HOME();

// $result = $objet_home->select();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();
    
    if (empty($_POST['title']) || !htmlspecialchars($_POST['title'])) {
        $response['title_error'] = "Please enter title*";
    }

    if (empty($_POST['description']) || !htmlspecialchars($_POST['title'])) {
        $response['description_error'] = "Please enter description*";
    }

    // Send the JSON response
    echo json_encode($response);


    if (empty($response)) {
        
        $title = $_POST['title'];
        $descriptio = $_POST['description'];
    }

    exit();
}

    $sql = "SELECT * FROM categories";
    $result = $objet_home->SELECT($sql);
    // dd($result);





?>





?>

