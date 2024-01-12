<?php
class HOME{
    public $db;
    public function select(){
        global $db;
        
        
        // $sql = " SELECT * FROM blog ";
        // $result = mysqli_query($db,$sql);

        // if (!$result) {
        //     die("error in selecting");
        // }else {
        //     return $result;
        // }
    }

    public function InsertWiki($title, $description){
        global $db;

        $sql = "INSERT INTO articles (title, content) VALUE (:title, :description)";
        $stmt = $db->prepare($sql);

    }




}