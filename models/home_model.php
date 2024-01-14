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

    public function InsertArticles_Tag($id_article,$id_tags){
        global $db;

        $sql = "INSERT INTO articles_tags (id_article,id_tag) VALUE (:id_article, :id_tag)";
        $stmt = $db->prepare($sql);

        foreach ($id_tags as $id_tag) {
            $stmt->bindParam(':id_article', $id_article);
            $stmt->bindParam(':id_tag', $id_tag);
            $stmt->execute();
        }

        return true;
    }

    public function SELECT($sql){
        global $db;

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
        return $result;
    }

    public function SoftDelet($id){
        global $db;

        $sql = "UPDATE articles SET status = 'archived' WHERE id = :id ";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return true;
    }




   


}