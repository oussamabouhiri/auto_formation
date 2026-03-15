<?php
require_once 'db.php';

$title = "New Book Title";
$author = "John Doe";
$price = 750;

$sql = "INSERT INTO library_books (title, author, price) VALUES (:title, :author, :price)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'title' => $title,
    'author' => $author,
    'price' => $price
]);

$lastId = $pdo->lastInsertId();
echo "Success! Book added with ID: $lastId";
?> 