<?php
// $objet_dashboard = new  DASHBOARD();
// $result = $objet_dashboard->select();
// $result1 = $objet_dashboard->select();
// if (isset($_GET['user_id'])) {
//     $user_id = $_GET['user_id'];
//     $objet_dashboard->delet($user_id);
// }

$objet_dashboard = new DASHBOARD();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();
    
    if (empty($_POST['category_name']) || !htmlspecialchars($_POST['category_name'])) {
        $response['category_error'] = "please enter name category*";
    }

    if (empty($_POST['tag_name']) || !htmlspecialchars($_POST['tag_name'])) {
        $response['tags_error'] = "please enter name tag*";
    }

    if (empty($response['category_error'])) {
        $category_name = $_POST['category_name'];
        $sql = "INSERT INTO categories (name) VALUE (:name)";
        $result = $objet_dashboard->InsertCategory($sql,$category_name);
        if ($result) {
            $response['true'] = "true";
        }
    }

    if (empty($response['tags_error'])) {
        $tag_name = $_POST['tag_name'];
        $sql = "INSERT INTO tags (name) VALUE (:name)";
        $result = $objet_dashboard->InsertCategory($sql,$tag_name);
        if ($result) {
            $response['true'] = "true";
        }
    }
      
    echo json_encode($response);
    exit();
}
    // read category
    $sql1 = "SELECT * FROM categories order by create_at desc, edit_at LIMIT 5";
    $result1 = $objet_dashboard->SELECT($sql1); 

    // read tags
    $sql2 = "SELECT * FROM tags LIMIT 5";  
    $result2 = $objet_dashboard->SELECT($sql2); 

    // read users
    $sql3 = "SELECT * FROM users";  
    $result3 = $objet_dashboard->SELECT($sql3); 
    

    // read articles
    $sql4 = "SELECT * FROM articles";  
    $result4 = $objet_dashboard->SELECT($sql4); 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $table= $_GET['table'];
        $sql = "DELETE FROM $table WHERE id = :id";
        $result5 = $objet_dashboard->Delet($sql,$id);
        header('location: index.php?page=dashboard');
    }



?>