<?php
// create get_id_authour
function get_id_author(PDO $pdo , $first_name ,$last_name) {
    $sql="SELECT author_id 
    FROM authors 
    WHERE first_name =:first_name 
    AND last_name=:last_name";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':first_name',$first_name);
    $statement->bindParam(':last_name',$last_name);
    if($statement->execute()) {
        $row= $statement->fetch(PDO::FETCH_ASSOC);
        if($row !== false ) {
            return $row['author_id'];
        }else {
            return false;
        }
    }
    return false ;
}

// create insert_author 
function insert_author(PDO $pdo , $first_name ,$last_name) {
    $sql = "INSERT INTO authors (first_name,last_name) 
    VALUES (:first_name , :last_name)";
    $statement = $pdo->prepare($sql);
    $state=$statement->execute(
        [
        ':first_name'=>$first_name ,
        ':last_name'=>$last_name 
        ]);
    if($state) {
        return $pdo->lastInsertId();
    } else {
        return false;
    }
}

// cretae insert_book 
function insert_book(PDO $pdo , $title ,$isbn,$published_date,$publisher_id) {
    $sql = "INSERT INTO books (title,isbn,published_date,publisher_id)
            VALUES (:title,:isbn,:published_date,:publisher_id)";
    $statement = $pdo->prepare($sql);
    $state=$statement->execute(
        [
        ':title'=>$title,
        ':isbn'=>$isbn,
        ':published_date'=>$published_date,
        ':publisher_id'=>$publisher_id
        ]
    );
    if($state) {
        return $pdo->lastInsertId();
    }else {
        return false;
    }
}
// create insert_book_author
function insert_book_author(PDO $pdo ,$book_id,$author_id) {
    $sql ="INSERT INTO book_authors (book_id ,author_id)
            VALUES (:book_id , :author_id)";
    $statement = $pdo->prepare($sql);
    $state=$statement->execute(
        [
        ':book_id'=>$book_id,
        ':author_id'=>$author_id
        ]
        );
    if($state) {
        return true;
    }else {
        return false;
    }
}
