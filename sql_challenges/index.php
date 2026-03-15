<?php
require_once 'db.php';

$sql = "SELECT id, name FROM categories";
$stmt = $pdo->query($sql);
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Category Menu</title>
</head>
<body>
    <form>
        <label for="category">Choose a category:</label>
        <select name="category" id="category">
            <?php foreach ($categories as $cat): ?>
                <option value="<?= htmlspecialchars($cat['id']) ?>">
                    <?= htmlspecialchars($cat['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>
</body>
</html>