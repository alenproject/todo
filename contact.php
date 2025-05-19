<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <h2>We’d Love to Hear from You</h2>
    <form action="contact.php" method="post">
        <label>Name:<br><input type="text" name="name" required></label><br><br>
        <label>Email:<br><input type="email" name="email" required></label><br><br>
        <label>Message:<br><textarea name="message" rows="6" cols="40" required></textarea></label><br><br>
        <input type="submit" value="Send Message">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        echo "<p>Thank you, $name! We have received your message.</p>";
    }
    ?>
    <p><a href="index.php">Return to Home</a></p>
</body>
</html>