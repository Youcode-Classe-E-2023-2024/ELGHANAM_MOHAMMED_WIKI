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

    if (empty($_POST['select_role']) ||  in_array('',array_map('htmlspecialchars', $_POST['select_role']))) {
        $response['select_tag_error'] = "Please selct tag*";
    }

    // Send the JSON response
    echo json_encode($response);


    if (empty($response)) {
        
        $title = $_POST['title'];
        $description = $_POST['description'];
        $status = "published";
        $id_user = $_SESSION['user_id'];
        $id_category = $_POST['category'];
        $id_tags = $_POST['select_role'];

        // dd($id_tags);
        $id_article = $objet_home->InsertArticles($title,$description,$status,$id_user,$id_category);
        if (isset($id_tags)) {
            # code...
            $result4 = $objet_home->InsertArticles_Tag($id_article,$id_tags);
        }
        if (!$result4) {
            echo "fff error";
        }
    }

    exit();
}

    // select category
    $sql = "SELECT * FROM categories";
    $result = $objet_home->SELECT($sql);
    $result3 = $objet_home->SELECT($sql);
    // dd($result);

    // select tag
    $sql1 = "SELECT * FROM tags";
    $result1 = $objet_home->SELECT($sql1);
    $result4 = $objet_home->SELECT($sql1);
    // select articles
    $sql2 = "SELECT * FROM articles WHERE status = $status";
    $result2 = $objet_home->SELECT($sql2);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = $objet_home->SoftDelet($id);
    }

    // dd($result2);





?>







