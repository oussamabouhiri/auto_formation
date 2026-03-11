<?php 
$name = "";
$email = "";
$message = "";
$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $message = $_POST['userMessage'];

    // Name length check
    if (strlen($name) < 6) {
        $error = "Name must be at least 6 characters long.";
    }
    // Name lowercase check (no uppercase allowed)
    else if (preg_match('/[A-Z]/', $name)) {
        $error = "Name must be in lowercase only.";
    }
    // Email validation
    else if (strpos($email, "@") === false) {
        $error = "Email must contain @.";
    }
    else if (substr($email, -4) !== ".com") {
        $error = "Email must end with '.com'.";
    }elseif(strpos($email," ") !== false){
        $error = "Your email shouldn't have space";
    }else {
        $success = "Your message has been sent successfully!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Contact Form" />
<title>The Contact Form</title>
<link rel="stylesheet" href="style.css" />
</head>

<body>

<div class="parent">

<form class="form" method="post">

    <?php if ($error): ?>
        <p class="form-message error"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p class="form-message success"><?php echo $success; ?></p>
    <?php endif; ?>

    <label for="user-name">
    User name:
            <br>
    <input 
        type="text"
        id="user-name"
        name="userName"
        value="<?php echo htmlspecialchars($name); ?>"
        placeholder="Enter your name"
    >
    </label>

    <br>

    <label for="email">
    Email:
            <br>
    <input
        type="text"
        id="email"
        name="userEmail"
        value="<?php echo htmlspecialchars($email); ?>"
        placeholder="Enter your email"
    >
    </label>

    <br>

    <label for="message">
    How can we help you:
        <br><br>
    <textarea
        id="message"
        name="userMessage"
        rows="5"
        cols="30"
        placeholder="Tell us how we can help you"
    ><?php echo htmlspecialchars($message); ?></textarea>
    </label>

    <br>

    <button type="submit">Send your message</button>

</form>

</div>

</body>
</html>