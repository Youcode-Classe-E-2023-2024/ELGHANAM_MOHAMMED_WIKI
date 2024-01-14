<?php
class HOME{
    public $db;
    public function SELECT($sql){
        global $db;
         
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $result;    
    }

    public function InsertWiki($title, $description){
        global $db;

        $sql = "INSERT INTO articles (title, content) VALUE (:title, :description)";
        $stmt = $db->prepare($sql);
        $smt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->execute();

        return true;
    }




}