<?php
class HOME{
    public $db;
    
    public function InsertArticles($title,$description,$status,$id_user,$id_category){
        global $db;
        
        $sql = "INSERT INTO articles (title, content, status, id_user, id_category) VALUE (:title, :description, :status, :id_user, :id_category)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id_user', $id_user);
        $stmt->bindParam(':id_category', $id_category);
        $stmt->execute();
        $last_id = $stmt->lastInsertId();
    
        return $last_id;    
    }




   


}