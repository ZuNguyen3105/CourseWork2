<?php
if(isset($_POST['joketext'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DataBaseFunctions.php';
        insertjoke($pdo, $_POST['joketext'], $_POST['authors'], $_POST['categories']);
        header('location: jokes.php');
        // $sql = 'INSERT INTO joke SET
        // joketext = :joketext,
        // jokedate = CURDATE(),
        // authorid = :authorid,
        // categoryid = 2';
        //$stmt = $pdo->prepare($sql);
        //$stmt->bindValue(':joketext', $_POST['joketext']);
        //$stmt->bindValue(':authorid', $_POST['authors']);
        //$stmt->execute();
    }catch (PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    $title = 'Add a new joke';
    // $sql_a = 'SELECT * FROM author';
    $author = allauthors($pdo);
    // $sql_c ='SELECT * FROM category';
    $categories = allcategories($pdo);
    ob_start();
    include '../templates/addjoke.html.php';
    $output = ob_get_clean();
}
include '../templates/admin_layout.html.php';
