<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    //$sql = 'DELETE FROM joke WHERE id = :id';
    //$stmt = $pdo->prepare($sql);
    //$stmt->bindValue(':id', $_POST['id']);
    //$stmt->execute();
    deletejoke($pdo,$_POST['id']);
    header('location: jokes.php');
}catch(PDOException $e){
$title = 'An error has occured';
$output = 'Unable to connect to delete joje: '.$e->getMessage();
}
include '../templates/admin_layout.html.php';