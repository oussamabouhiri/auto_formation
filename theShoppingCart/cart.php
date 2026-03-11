<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$items = [
    1 => "Apple",
    2 => "Banana",
    3 => "Orange"
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item_id'])) {
    $itemId = (int)$_POST['item_id'];
    if (!in_array($itemId, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $itemId;
        $message = $items[$itemId] . " added to cart!";
    } else {
        $message = $items[$itemId] . " is already in the cart!";
    }
    header("Location: cart.php");
    exit();
}

$cartCount = count($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Cart</title>
    <link rel="stylesheet" href="style.css">
</head>         
<body>
    <h1>Simple Shopping Cart</h1>
    <p>Cart: <?php echo $cartCount; ?> item<?php echo $cartCount != 1 ? 's' : ''; ?></p>

    <?php if (!empty($message)) echo "<p style='color:green;'>$message</p>"; ?>

    <ul>
        <?php foreach ($items as $id => $name): ?>
            <li>
                <?php echo htmlspecialchars($name); ?>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="item_id" value="<?php echo $id; ?>">
                    <button type="submit">Add to Cart</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Items in Cart:</h2>
    <ul>
        <?php
        foreach ($_SESSION['cart'] as $id) {
            echo "<li>" . htmlspecialchars($items[$id]) . "</li>";
        }
        ?>
    </ul>
</body>
</html>