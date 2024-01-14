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

    if (empty($_POST['category']) || !htmlspecialchars($_POST['category'])) {
        $response['select_category_error'] = "Please select category*";
    }

    if (empty($_POST['select_role']) || !htmlspecialchars($_POST['select_role'])) {
        $response['select_tag_error'] = "Please selct tag*";
    }

    // Send the JSON response
    echo json_encode($response);


    if (empty($response)) {
        
        $title = $_POST['title'];
        $descriptio = $_POST['description'];
    }

    exit();
}

    // select category
    $sql = "SELECT * FROM categories";
    $result = $objet_home->SELECT($sql);
    // dd($result);

    // celect tag
    $sql1 = "SELECT * FROM tags";
    $result1 = $objet_home->SELECT($sql1);





?>





?>

