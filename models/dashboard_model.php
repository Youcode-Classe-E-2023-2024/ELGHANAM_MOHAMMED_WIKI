<?php
 class DASHBOARD{
    public $db;

//     public function select(){
//         global $db;
//         $user_id = $_SESSION['user_id'];
//         $sql = " SELECT * FROM signup ";
//         $result = mysqli_query($db,$sql);

//         if (!$result) {
//             die("error in selecting");
//         }else {
//             return $result;
//         }

//     }

    

//     public function delet($user_id){
//         global $db;
        
        
//         $sql =  "DELETE FROM signup WHERE user_id = $user_id ";
//         $result = mysqli_query($db,$sql);
//         if (!$result) {
//             die("error in deleting");
//         }else {
//             header('location:index.php?page=dashboard');
//         }


    public function InsertCategory($category_name){
        global $db;

        $sql = "INSERT INTO categories (name) VALUE (:name)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $category_name);
        $stmt->execute();

        return true;
    }


    
}

    


// }


