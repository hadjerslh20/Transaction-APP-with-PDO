<?php
$pdo=require 'conn.php';
require 'func.php';

$first_name = $_POST['fName'];
$last_name = $_POST['lName'];
$title = $_POST['title'];
$ISBN = $_POST['isbn'];
$publisher_date = $_POST['PD'];
$publisher_id = $_POST['PID'];

try {
    $pdo->beginTransaction();
    $author_id = get_id_author($pdo,$first_name,$last_name);
    if(!$author_id) {
        $author_id = insert_author($pdo,$first_name,$last_name);
    }
    $book_id = insert_book($pdo,$title,$ISBN,$publisher_date,$publisher_id);
    insert_book_author($pdo,$book_id,$author_id);
    $pdo->commit();
    echo 'The book is inserted';
}catch(PDOException $e) {
    $pdo->rollback();
    echo $e->getMessage();
}
