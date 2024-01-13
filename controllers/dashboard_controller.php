<?php
// $objet_dashboard = new  DASHBOARD();
// $result = $objet_dashboard->select();
// $result1 = $objet_dashboard->select();
// if (isset($_GET['user_id'])) {
//     $user_id = $_GET['user_id'];
//     $objet_dashboard->delet($user_id);
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();
    
    if (empty($_POST['categoryName']) || !htmlspecialchars($_POST['categoryName'])) {
        $response['category_error'] = "Please enter name category*";
    }

    echo json_encode($response);
    exit();

}


?>