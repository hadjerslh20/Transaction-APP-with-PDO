<?php 
$tables = [
    "CREATE TABLE IF NOT EXISTS authors (
    author_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100)
);",
    "CREATE TABLE IF NOT EXISTS  books (
    book_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    isbn VARCHAR(20),
    published_date DATE,
    publisher_id INT
);",
"CREATE TABLE IF NOT EXISTS book_authors  (
    book_id INT,
    author_id INT,
    PRIMARY KEY (book_id, author_id),
    FOREIGN KEY (book_id) REFERENCES books(book_id),
    FOREIGN KEY (author_id) REFERENCES authors(author_id)
);"
];
$pdo = require 'conn.php';
foreach($tables as $table) {
    $pdo->exec($table);
}