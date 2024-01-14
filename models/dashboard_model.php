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


    public function InsertCategory($sql,$category_name){
        global $db;

        
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $category_name);
        $stmt->execute();

        return true;
    }

    public function SELECT($sql){
        global $db;
         
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $result;    
    }

    public function Update($sql){
        
    }

    public function SoftDelet($sql){
        
    }

    public function Delet($sql,$id){
        global $db;
        // die ('hello');
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return true;
    }

    
}

    


// }


