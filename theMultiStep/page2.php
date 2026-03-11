<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    session_start();
    $_SESSION['language']= $_POST['language'];
    header("Location: page3.php");
    exit();
}
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
        <form action="index3.php"method="post">
            <label for="language">
                Tell us what is your favorite language: 
            </label>
            <input type="text" name="language" id="language" placeholder="Your prefered language" required>
            <button type="submit">Submit</button>
        </form>