<?php
require_once 'db.php';

$minPrice = 500;

$sql = "SELECT title FROM library_books WHERE price > :price";
$stmt = $pdo->prepare($sql);
$stmt->execute(['price' => $minPrice]);
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Books above <?= htmlspecialchars($minPrice) ?></title>
</head>
<body>
    <h1>Books with Price > <?= htmlspecialchars($minPrice) ?></h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?= htmlspecialchars($book['title']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>