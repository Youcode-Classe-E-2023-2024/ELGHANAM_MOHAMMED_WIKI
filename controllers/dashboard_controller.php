<?php
// $objet_dashboard = new  DASHBOARD();
// $result = $objet_dashboard->select();
// $result1 = $objet_dashboard->select();
// if (isset($_GET['user_id'])) {
//     $user_id = $_GET['user_id'];
//     $objet_dashboard->delet($user_id);
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $objet_dashboard = new DASHBOARD();
    $response = array();
    
    if (empty($_POST['category_name']) || !htmlspecialchars($_POST['category_name'])) {
        $response['category_error'] = "please enter name category*";
    }

    if (empty($_POST['tag_name']) || !htmlspecialchars($_POST['tag_name'])) {
        $response['tags_error'] = "please enter name tag*";
    }

    if (empty($response['category_error'])) {
        $category_name = $_POST['category_name'];
        $result = $objet_dashboard->InsertCategory($category_name);
        if ($result) {
            echo"good inserte category";
        }
    }
    
    
    
    
    
    echo json_encode($response);
    exit();

}


?>