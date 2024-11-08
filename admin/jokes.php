<?php
require "Login/Check.php";
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';

    // $sql = 'SELECT joke.id, jokedate, joke_pic ,joketext, `name`, email, categoryName FROM joke 
    // INNER JOIN author ON authorid = author.id
    // INNER JOIN category ON categoryid = category.id';

    $jokes = alljokes($pdo);
    $title = 'Joke list';
    $totaljokes = totaljokes($pdo);

    ob_start();
    include '../templates/jokes.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occured';
    $output = 'Database error:' . $e->getMessage();
    
}
include '../templates/admin_layout.html.php';