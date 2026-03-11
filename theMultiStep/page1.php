<?php
<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    $_SESSION['name'] = $_POST['name'];
    header("Location: page2.php");
    exit();
};
?>

<!Doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1.0">
    <meta type="description" content="Multi step onbording pages with php">
    <title>mutli step app</title>    
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>
                Welcome to your dashboard let's check your access.
            </h1>
        </header>
        <form method="post">
            <label for="UserName">
                First Enter your name here: 
            </label>
            <input type="text" name="name" id="UserName" placeholder="Your full name" required>
            <button type="submit">Next</button>
        </form>
    </body>
</html>
?>