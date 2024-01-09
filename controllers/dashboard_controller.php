<?php
$objet_dashboard = new  DASHBOARD();
$result = $objet_dashboard->select();
$result1 = $objet_dashboard->select();
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $objet_dashboard->delet($user_id);
}




?>