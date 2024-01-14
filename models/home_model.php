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
        $last_id = $db->lastInsertId();
    
        return $last_id;    
    }

    public function InsertArticles_Tag($id_article,$id_tag){
        global $db;

        $sql = "INSERT INTO articles_tags (id_article,id_tag) VALUE (:id_article, :id_tag)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id_article', $id_article);
        $stmt->bindParam(':id_tag', $id_tag);
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




   


}