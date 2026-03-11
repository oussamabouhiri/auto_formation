<?php

$products = [
    ["name" => "Laptop", "category" => "tech"],
    ["name" => "Phone", "category" => "tech"],
    ["name" => "Tablet", "category" => "tech"],
    ["name" => "Chair", "category" => "furniture"],
    ["name" => "Desk", "category" => "furniture"]
];

$category = $_GET['category'] ?? null;
$sort = $_GET['sort'] ?? null;


if ($category) {
    $products = array_filter($products, function($product) use ($category) {
        return $product['category'] === $category;
    });
}


if ($sort === "asc") {
    usort($products, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
} elseif ($sort === "desc") {
    usort($products, function($a, $b) {
        return strcmp($b['name'], $a['name']);
    });
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
</head>
<body>

<h2>Filter by Category</h2>
<a href="?category=tech">Tech</a>
<a href="?category=furniture">Furniture</a>
<a href="index2.php">All</a>

<h2>Sort</h2>
<a href="?sort=asc">A → Z</a><br>
<a href="?sort=desc">Z → A</a>
<h2>Products</h2>
<ul>
<?php foreach ($products as $product): ?>
    <li>
        <?php echo $product['name']; ?> (<?php echo $product['category']; ?>)
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>